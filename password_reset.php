<?php
  require_once('partials/header.php');
  function displayResetMessages() {
    if(isset($_GET['email_required']))
    {
      echo '<div class="alert alert-danger text-center">Email is required.</div>';
    }
    if (isset($_GET['invalid_email']))
    {
      echo '<div class="alert alert-danger text-center">Please enter a valid email address.</div>';
    }
    if (isset($_GET['email_not_found']))
    {
      echo '<div class="alert alert-danger text-center">There is no account associated with that email. Please register.</div>';
    }
    if(isset($_GET['sent_reset_email']))
    {
      $email = $_GET['email'];
      echo "<div class='alert alert-success text-center'>A password reset email was sent to $email.</div>";
    }
    if (isset($_GET['email_failed_to_send']))
    {
      echo "<div class='alert alert-danger text-center'>The password reset email failed to send. Please try again or contact support at matchisuru@gmail.com.</div>";
    }
    if (isset($_GET['db_failure']))
    {
      echo "<div class='alert alert-danger text-center'>There was an error processing your request. Please contact support at matchisuru@gmail.com.</div>";
    }
      if(isset($_GET['not_verified']))
      {
          echo '<div class="alert alert-danger text-center">Your account is not verified yet. An email has been sent to your email address. Please verify it before continuing.</div>';
      }
      if(isset($_GET['non_matching_hashes']))
      {
          echo '<div class="alert alert-danger text-center">An error occurred while resetting your password. Please try again.</div>';
      }
  }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title text-white mt-5">
          <h3 class="text-center py-2">Reset Password</h3>
        </div>

        <?php
          displayResetMessages();
        ?>

        <div class="card-body text-center">
          <form action="controllers/send_password_reset_email.php" method="POST">
            <input type="text" name="email" placeholder="Email" class="form-control my-2">
            <button class="btn btn-success mt-2" name="send-password-reset-email" class="pt-3">Send Password Reset Email</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('partials/footer.php'); ?>
