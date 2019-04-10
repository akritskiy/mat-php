<?php
    require_once('partials/header.php');

    $err_empty_input = isset($_GET['username_or_email_required']);
    $err_invalid_input = isset($_GET['invalid_reset_input']);
    $success_reset_link_sent = isset($_GET['sent_reset_link']);

    function displayResetMessages($err_invalid_input, $success_reset_link_sent, $err_empty_input) {
        if ($err_invalid_input){
            echo '<div class="alert alert-danger text-center"> The email or username you entered is invalid. Please enter another email or username.</div>';
        }
        if($success_reset_link_sent)
        {
            echo '<div class="alert alert-success text-center" The reset password link was sent to your email. Please check your email.</div>';
        }
        if($err_empty_input)
        {
            echo '<div class="alert alert-danger text-center" A username or email is required.</div>';
        }
    }
?>
<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title bg-primary text-white mt-5">
          <h3 class="text-center py-2">Reset Password</h3>
        </div>

          <?php
          displayResetMessages($err_invalid_input, $success_reset_link_sent, $err_empty_input);
          ?>

        <div class="card-body text-center">
          <form action="controllers/send_password_reset_email.php" method="POST">
            <input type="text" name="reset" placeholder="username or email" class="form-control my-2">
            <button class="btn btn-success mt-2" name="send-password-reset-email" class="pt-3">Send password reset email</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('partials/footer.php'); ?>
