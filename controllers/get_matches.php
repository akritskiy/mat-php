<?php
session_start();
require_once('../config/db.php');

$s = $_SESSION;
$p = $_POST;

// uid, game, and system
$currentUser_uid = $s['user']['id'];
$currentUser_game = $p['chooseGame'];
$currentUser_system = $p['system'];
// other data saved as JSON obj
$currentUser_data = [
  "skillLevel" => $p['skillLevel'],
  "startTime" => $p['startTime'],
  "endTime" => $p['endTime'],
  "timeZone" => $p['timeZone']
];
$currentUser_data_JSON = json_encode($currentUser_data);

// check if user already made this or a similar request
$q = "SELECT * FROM matchrequests WHERE userID='$currentUser_uid' AND game='$currentUser_game' AND system='$currentUser_system';";
$res = mysqli_fetch_assoc(mysqli_query($conn, $q));

if (!$res) { // if not a duplicate
  // add user's match request to matchrequests table
  $q = "INSERT INTO matchrequests (userID, game, system, data) VALUES ('$currentUser_uid', '$currentUser_game', '$currentUser_system', '$currentUser_data_JSON');";
  $res = mysqli_query($conn, $q);
  if (!$res) { // failed
    header("location: ../index.php?db_failure_contact_support");
    exit();
  }
} else { // is a duplicate
  $q = "UPDATE matchrequests SET data='$currentUser_data_JSON' WHERE userID='$currentUser_uid' AND game='$currentUser_game' AND system='$currentUser_system';";
  $res = mysqli_query($conn, $q);
  if (!$res) { // failed
    header("location: ../index.php?db_failure_contact_support");
    exit();
  }
}
// success ->

// bring in current user's general pref responses
$q = "SELECT * FROM generalpreferences WHERE userID='$currentUser_uid' LIMIT 1;";
$currentUser_genPrefRow = mysqli_fetch_assoc(mysqli_query($conn, $q));

/* Search matchrequests table for users with:
  uid != user's uid
  game == user's game
  system == user's system */
$q = "SELECT * FROM matchrequests WHERE userID!='$currentUser_uid' AND game='$currentUser_game' AND system='$currentUser_system';";
$otherUsers_matchRequestRows = mysqli_fetch_all(mysqli_query($conn, $q), MYSQLI_ASSOC);

/* What if none found? */
if (!$otherUsers_matchRequestRows) {
  header("location: ../display_matches.php?none_found");
  exit();
}

/* for each other user found, fetch their general pref */
function formatArrForSQL($arr)
{ /* need this func for SQL IN clause, format array to SQL format: ('item1', 'item2', 'item3') */
  return '(\'' . implode('\', \'', $arr) . '\')';
}

$otherUsers_IDs = [];
foreach ($otherUsers_matchRequestRows as $row) array_push($otherUsers_IDs, $row['userID']);
$otherUsers_IDs_SQL = formatArrForSQL($otherUsers_IDs);

$q = "SELECT * FROM generalpreferences WHERE userID IN $otherUsers_IDs_SQL;";
$otherUsers_genPrefRows = mysqli_fetch_all(mysqli_query($conn, $q), MYSQLI_ASSOC);

/* calculate compatibility */

/* general preferences:
  current user's general pref: $currentUser_genPrefRow
  other users general pref: $otherUsers_genPrefRows
  differentiate current user and other users data w/ "currentUser" and "otherUsers" prefixes
  the result will be:
    $result = [
      [0] => [
        "otherUser_uid" => $otherUser_uid,
        "score" => $score,
        "matchedOn" => $matchedOn
      ],
      [1] => [
        "otherUser_uid2" => $otherUser_uid,
        "score" => $score,
        "matchedOn" => $matchedOn
      ],
      etc.
    ]
    This result will be stores in session under "newMatchResult"
  weights array: initialized to 1 for each question (to avoid index out of bounds err if questions are added/deleted)
  Each weight can be changed to set the weight or "importance" of questions. */
$result = [];
$currentUser_answers = json_decode($currentUser_genPrefRow['answers']);
$weights = array_fill(0, count($currentUser_answers), 1);
if ($weights[0]) $weights[0] = 2; // best teammates are quiet
if ($weights[1]) $weights[1] = 2; // user is loud/quiet
if ($weights[2]) $weights[2] = 6; // get mad
if ($weights[3]) $weights[3] = 10; // foul language
if ($weights[7]) $weights[7] = 8; // main goal while gaming
if ($weights[8]) $weights[8] = 4; // serious or casual

foreach ($otherUsers_genPrefRows as $row) {
  $score = 1000;
  $matchedOn = [];

  $otherUser_uid = $row['userID'];
  $otherUser_answers = json_decode($row['answers']);
  for ($i = 0; $i < count($otherUser_answers); $i++) {
    if ($currentUser_answers[$i] == $otherUser_answers[$i]) { // answers match
      array_push($matchedOn, $i);

      // special case: two managers
      if ($currentUser_answers[$i] == "Manager" && $otherUser_answers[$i] == "Manager") {
        $score = $score - (10 * $weights[$i]);
      } else {
        $score = $score + (10 * $weights[$i]);
      }
    } else { // answers differ
      $score = $score - (10 * $weights[$i]);
    }
  }

  $thisOtherUser_result = [
    "score" => $score,
    "otherUser_uid" => $otherUser_uid,
    "matchedOn" => $matchedOn,
  ];
  array_push($result, $thisOtherUser_result);
}

/* game specific compatibility
  current user game specific pref:
    data: $currentUser_data
    contains skill level, times, and time zone
  other users game specific rows: $otherUsers_matchRequestRows */
foreach ($otherUsers_matchRequestRows as $row) {
  $otherUser_uid = $row['userID'];
  $otherUser_data = json_decode($row['data'], true);
  $otherUser_skillLevel = $otherUser_data['skillLevel'];

  foreach ($result as $key => $r) {
    if ($r['otherUser_uid'] == $otherUser_uid) {
      $result[$key]['otherUser_skillLevel'] = $otherUser_skillLevel;
      if ($currentUser_data['skillLevel'] == $otherUser_skillLevel) { // if skill level matches
        $result[$key]['matchedOn_skillLevel'] = true;
        $result[$key]['score'] = $result[$key]['score'] + 200;
      } else {
        $result[$key]['matchedOn_skillLevel'] = false;
        $result[$key]['score'] = $result[$key]['score'] - 200;
      }
    }
  }
}

arsort($result); // sort by score
if (count($result) > 5) $result = array_slice($result, 0, 5); // return max 5 results

/* Normalize scores (divide by max, multiply by 100... results in a score out of 100) */
$maxScore = $result[0]['score'];
print("MAX SCORE:" . $maxScore);
foreach ($result as $key => $r) {
  $result[$key]['score'] = floor($r['score'] / $maxScore * 100);
}

$_SESSION["newMatchResult"] = $result;
header("location: ../display_matches.php");
exit();
