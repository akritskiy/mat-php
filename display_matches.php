<?php
require_once('partials/header.php');

$s = $_SESSION;
if (!isset($s['uid']) && !isset($s['username']) && !isset($s['email'])) {
  header("location: login.php?auth_required");
}

require_once('config/db.php');
// fetch user general pref
$uid = $s['uid'];
$q = "SELECT * FROM generalpreferences WHERE userID='$uid' LIMIT 1;";
$user_genPref = mysqli_fetch_assoc(mysqli_query($conn, $q));
$user_answers = json_decode($user_genPref['answers']);
$questions = [
  "Are the best teammates loud or quiet?",
  "Are you loud or quiet?",
  "Do you get mad while playing games with others?",
  "Do you use foul language often?",
  "What is your age group?",
  "What is your style of play?",
  "Are you active on mic?",
  "What is your main goal while gaming?",
  "Are you a serious or casual gamer?",
  "Choose a color:",
  "Choose an animal:",
  "Choose a book type:",
  "Choose a drink:",
  "Choose one:",
  "Choose one:"
];

function renderMatchesToDOM($res, $conn, $questions, $user_answers)
{
  $html = "<ul class='list-group'>";
  foreach ($res as $r) {
    $otherUser_uid = $r['otherUser_uid'];

    // fetch user
    $q = "SELECT * FROM users WHERE id='$otherUser_uid' LIMIT 1;";
    $otherUser = mysqli_fetch_assoc(mysqli_query($conn, $q));
    $otherUser_username = $otherUser['username'];
    $otherUser_dispName = $otherUser['username'];

    // fetch profile
    $q = "SELECT * FROM profiles WHERE userID='$otherUser_uid' LIMIT 1;";
    $profile = mysqli_fetch_assoc(mysqli_query($conn, $q));
    if ($profile['dispName']) $otherUser_dispName = $profile['dispName'];

    // items to render
    $score = $r['score'];

    // score breakdown
    $matchedOn = $r['matchedOn'];
    $matchedOn_skillLevel = $r['matchedOn_skillLevel'];
    $otherUser_skillLevel = $r['otherUser_skillLevel'];
    $scoreBreakdown = "<p>You matched with $otherUser_dispName on the following questions:</p>";
    foreach ($matchedOn as $q) {
      $questionText = $questions[$q];
      $user_answer = $user_answers[$q];
      $playStyleNote = null;
      if ($q == 5) {
        $playStyleNote = "<br><small>We believe similar play styles clash, so matching on play style actually reduced your match score.</small>";
      }
      $scoreBreakdown = $scoreBreakdown . "<p>$questionText<br>You both chose: $user_answer $playStyleNote</p>";
    }

    if ($matchedOn_skillLevel) {
      $scoreBreakdown = $scoreBreakdown . "<p>You also matched on skill-level.<br>You both said: $otherUser_skillLevel<br><small>Skill-level is weighted very highly in our calculation.</small></p>";
    } else {
      $scoreBreakdown = $scoreBreakdown . "<p>You did not match on skill-level.<br><small>Skill-level is weighted very highly in our calculation.</small></p>";
    }

    $scoreBreakdown = "<small>" . $scoreBreakdown . "</small>";

    $listItem = "
    <li class='list-group-item'>
      <p><i class='fas fa-user-astronaut'></i><a href='/user.php?user=$otherUser_username'>$otherUser_dispName</a></p>
      <p>Match score: $score%</p>
      <div class='progress'>
        <div class='progress-bar' role='progressbar' style='width: $score%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
      </div>
      <p class='howWasThisCalc'>
        <a tabindex='0' role='button' data-toggle='popover' data-trigger='focus'
        data-placement='left' title='Match score: explained' data-content='$scoreBreakdown'
        data-html='true'>
          <i class='fas fa-info-circle'></i>How was this calculated?
        </a>
      </p>
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
      <div class="card-body displayMatchesCardBody">
        <?php renderMatchesToDOM($res, $conn, $questions, $user_answers); ?>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class='text-center'><button type="button" class="btn darkBtn" data-toggle="modal" data-target="#nowWhatModal"><i class="fas fa-info-circle"></i>Now what?</button></p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class='text-center'><a class="btn darkBtn" href="/dashboard.php" role="button">Back to Dashboard</a></p>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- "Now what?"" Modal -->
<div class="modal fade lightModal" id="nowWhatModal" tabindex="-1" role="dialog" aria-labelledby="InfoHelpLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Now what?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Unfortunately, we haven't developed a messaging and notification feature yet. (Don't worry: it's coming soon.)</p>
        <p>You matched with these players because you're compatible in personality, playstyle, and skill level. You also both put out a seek for other players on Matchisuru. This means the gamers you matched with are expecting to be contacted in-game. We encourage you to DM your matches on the console or in-game and invite them to a gaming sesh.</p>
        <p>Having trouble writing that DM? Try something like this:</p>
        <p>Hey, we matched on Matchisuru to play Dead by Daylight on PC with a pretty good match score. Are you on right now?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn darkBtn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>
<script>
  $('#nowWhatModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  });

  $(function() {
    $('[data-toggle="popover"]').popover()
  });

  $('.popover-dismiss').popover({
    trigger: 'focus'
  });
</script>