<?php
require_once('partials/header.php');
require_once('config/db.php');

function renderResultsToDOM($results, $conn)
{
  $html = "<ul class='list-group'>";
  foreach ($results as $r) {
    $otherUser_uid = $r['otherUser_uid'];

    // fetch user
    $q = "SELECT * FROM users WHERE id='$otherUser_uid' LIMIT 1;";
    $user = mysqli_fetch_assoc(mysqli_query($conn, $q));
    $username = $user['username'];

    $score = $r['score'];
    $matchedOn = $r['matchedOn'];
    $matchedOn_string = "";
    foreach ($matchedOn as $item) {
      $matchedOn_string = $matchedOn_string . ($item + 1) . ",";
    }
    $matchedOn_skillLevel = "No";
    if ($r['matchedOn_skillLevel']) $matchedOn_skillLevel = "Yes";
    $listItem = "
    <li class='list-group-item'>
      <p>User ID: $otherUser_uid</p>
      <p>Username: $username</p>
      <p>Match score: $score</p>
      <p>Questions matched on: $matchedOn_string</p>
      <p>Matched on skill level: $matchedOn_skillLevel</p>
    </li>
    ";
    $html = $html . $listItem;
  }
  $html = $html . "</ul>";
  echo $html;
}

$s = $_SESSION;
$res = $s["newMatchResult"];
?>

<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">Your Matches</div>
      <div class="card-body displayResultsCardBody">
        <?php renderResultsToDOM($res, $conn); ?>
        <p class="text-center mt-2">
          <a class="btn darkBtn" href="/dashboard.php" role="button">Back to Dashboard</a>
        </p>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>