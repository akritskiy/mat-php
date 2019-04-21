<?php
if (isset($_SESSION['uid']) && isset($_SESSION['email']) && isset($_SESSION['username'])) {
  // If all of [uid, email, username] are set, the user is already logged in... redir to dash
  header("location: dashboard.php?already_logged_in");
}

function displayResetMessages()
{
  if (isset($_GET['email_required'])) {
    echo '<div class="alert alert-danger text-center">Email is required.</div>';
  }
  if (isset($_GET['invalid_email'])) {
    echo '<div class="alert alert-danger text-center">Please enter a valid email address.</div>';
  }
  if (isset($_GET['email_not_found'])) {
    echo '<div class="alert alert-danger text-center">There is no account associated with that email. Please register.</div>';
  }
  if (isset($_GET['db_failure'])) {
    echo "<div class='alert alert-danger text-center'>There was an error processing your request. Please contact support at matchisuru@gmail.com.</div>";
  }
  if (isset($_GET['email_failed_to_send'])) {
    echo "<div class='alert alert-danger text-center'>The password reset email failed to send. Please try again or contact support at matchisuru@gmail.com.</div>";
  }
  if (isset($_GET['sent_email'])) {
    echo "<div class='alert alert-success text-center'>Email sent. Please check your email to reset your password.</div>";
  }
  if (isset($_GET['link_failed_or_expired'])) {
    echo "<div class='alert alert-success text-center'>That password reset link was either invalid or expired. Please try again or contact support.</div>";
  }
}
?>

<?php require_once('partials/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title text-white mt-5">
          <h3 class="text-center py-2">Forgot your password?</h3>
        </div>
        <p>Enter your email below, and we'll send you an email with instructions to reset your password.</p>

        <?php displayResetMessages(); ?>

        <div class="card-body text-center">
          <form action="controllers/send_password_reset_email.php" method="POST">
            <input type="text" name="email" placeholder="Email" class="form-control my-2">
            <button class="btn btn-success mt-2" name="send-password-reset-email" class="pt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>