<?php
require_once('partials/header.php');
require_once('config/db.php');
require_once('resources/formatDateCreated.php');

if (!isset($_SESSION['uid']) || !isset($_SESSION['email']) || !isset($_SESSION['username'])) {
  // If any of [uid, email, username] are not set, redirect to login
  header("location: login.php?auth_required");
  exit();
}

$s = $_SESSION;
$uid = $s['user']['id'];
$username = $s['user']['username'];
$dispName = $username;
$q = "SELECT * FROM profiles where userID='$uid' LIMIT 1;";
$profile = mysqli_fetch_assoc(mysqli_query($conn, $q));
if ($profile['dispName']) $dispName = $profile['dispName'];

// change btn URL if they've taken the quiz already
$q = "SELECT * FROM generalpreferences WHERE userID='$uid' LIMIT 1;";
$res = mysqli_fetch_assoc(mysqli_query($conn, $q));
$takenGenPrefQuizBefore = false;
if ($res) $takenGenPrefQuizBefore = true;
$getMatchesLink = 'gp_quiz.php';
if ($takenGenPrefQuizBefore) {
  $getMatchesLink = '/select_game.php';
}

function renderActiveMatchesToDOM($res)
{
  if (!$res) {
    echo "You currently don't have any active matches.";
  } else {
    $s = $_SESSION;
    $uid = $s['user']['id'];

    $html = "<ul class='list-group'>";
    foreach ($res as $r) {
      $game = $r['game'];
      $system = $r['system'];
      $date = formatDateCreated($r['created_at']);
      $form = "
      <form method='POST' action='controllers/delete_match_request.php'>
        <input type='hidden' name='uid' value='$uid'>
        <input type='hidden' name='game' value='$game'>
        <input type='hidden' name='system' value='$system'>
        <button class='btn' type='submit' name='delete-match-request'>Delete</button>
      </form>";

      $html = $html . "
      <li class='list-group-item'>
        $form
        <p>Game: $game</p>
        <p>System: $system</p>
        <p>Created: $date</p>
      </li>";
    }
    $html = $html . "</ul>";
    echo $html;
  }
}

$q = "SELECT * FROM matchrequests WHERE userID='$uid' ORDER BY created_at DESC LIMIT 5;";
$res = mysqli_fetch_all(mysqli_query($conn, $q), MYSQLI_ASSOC);
$numMatchRequests = count($res);
?>

<div class="row">
  <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">Dashboard</div>
      <div class="card-body dashboardCardBody">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 text-center matchCenter">
            <h5>Match Center</h5>
            <div class="row matchCenterBtnRow">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <p><button type="button" class="btn darkBtn" data-toggle="modal" data-target="#howItWorksModal"><i class="fas fa-info-circle"></i>How it works</button></p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <p><button type="button" class="btn darkBtn" onclick="window.location.href = '<?php echo $getMatchesLink; ?>';">Get Matches</button></p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <h5>News / Updates from the Dev Team</h5>
                <p>Coming soon.</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 activeMatchReqs">
            <h5 class="text-center">Active Match Requests</h5>
            <p class="text-center"><small><i class="fas fa-info-circle"></i>These are your <?php echo $numMatchRequests; ?> most recent match requests.</small></p>
            <?php renderActiveMatchesToDOM($res); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- How It Works Modal -->
<div class="modal fade lightModal" id="howItWorksModal" tabindex="-1" role="dialog" aria-labelledby="InfoHelpLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">How It Works</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol>
          <li>First, we'll ask you to take a general preferences quiz. This is just for us to get to know you a little better and get an idea of the type of gamer you'd be compatible with.<br><small>We'll only ask you to take this quiz your first time. But don't worry: if you want to retake it, you can do so from your profile page.</small></li>
          <li>Next, we'll ask you to choose a game and answer some game-specific questions. Nothing too crazy... Just your experience/skill level, your system, and when you want to play.</li>
          <li>You're all set. We'll do some magic behind the scenes and return a list of the five most-compatible gamers in our system. We'll then give you everything you need to get in touch with them and setup a gaming sesh.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn darkBtn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>
<script>
  $('#howItWorksModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  })
</script>