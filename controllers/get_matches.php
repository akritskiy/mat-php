<?php
session_start();
require_once('../config/db.php');

$s = $_SESSION;
$uid = $s['user']['id'];

$p = $_POST;
// game and system are going to go into DB, as these will be used to filter out users
$game = $p['chooseGame'];
$system = $p['system'];
// the other data will go into DB as a JSON data object
$skillLevel = $p['skillLevel'];
$startTime = $p['startTime'];
$endTime = $p['endTime'];
$timeZone = $p['timeZone'];

$data = [
  "skillLevel" => $skillLevel,
  "startTime" => $startTime,
  "endTime" => $endTime,
  "timeZone" => $timeZone
];
$dataJSON = json_encode($data);

// add their match request to the DB
// $q = "INSERT INTO matchrequests (userID, game, system, data) VALUES ('$uid', '$game', '$system', '$dataJSON');";
// $res = mysqli_query($conn, $q);
// if ($res) {
//   print("Success");
// }

// search for other users with similar requests
$q = "SELECT * FROM matchrequests WHERE game='$game' AND system='$system';";
$res = mysqli_query($conn, $q);
$resArr = mysqli_fetch_all($res, MYSQLI_ASSOC);
foreach ($resArr as $r) {
  print_r($r);
  echo "<br>";
}
