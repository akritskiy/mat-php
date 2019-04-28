<?php
require_once('partials/header.php');

if (!isset($_SESSION['uid']) || !isset($_SESSION['email']) || !isset($_SESSION['username'])) {
  // If any of [uid, email, username] are not set, redirect to login
  header("location: login.php?auth_required");
  exit();
}

$takenGenPrefQuizBefore = false;
$getMatchesLink = 'gp_quiz.php';
if ($takenGenPrefQuizBefore) {
  $getMatchesLink = '/choose_game.php';
}
?>

<div class="row">
  <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">Dashboard</div>
      <div class="card-body dashboardCardBody">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <p class="text-center">Match Center</p>
            <p><button type="button" class="btn darkBtn" data-toggle="modal" data-target="#howItWorksModal"><i class="fas fa-info-circle"></i>How it works</button></p>
            <p><a href="<?php echo $getMatchesLink; ?>" class="btn darkBtn">Get Matches</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- How It Works Modal -->
<div class="modal fade" id="howItWorksModal" tabindex="-1" role="dialog" aria-labelledby="InfoHelpLabel" aria-hidden="true">
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
          <li>First, we'll ask you to take a general preferences quiz. This is just for us to get to know you a little better and get an idea of the type of gamer you'd be compatible with.<br><small>We'll only ask you to take this quiz your first time. But don't worry. If you want to retake it, you can do so from your profile.</small></li>
          <li>Next, we'll ask you to choose a game and answer some game-specific questions. We want you to get to your game as soon as possible, so this quiz will be quite short. We'll just ask a few questions about your experience/skill level.</li>
          <li>You're all set. We'll do some magic behind the scenes and return a list of the ten most-compatible gamers in our system. We'll then allow you to send them a message and setup a gaming sesh.</li>
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