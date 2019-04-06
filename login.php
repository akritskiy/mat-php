<?php
  require_once('partials/header.php');
  if (isset($_SESSION['uid'])) {
    header("location: dashboard.php?already_logged_in");
  }

  $err_required = isset($_GET['required']);
  $err_invalid_login = isset($_GET['invalid_login']);
  $err_auth_required = isset($_GET['auth_required']);
  $success_registration = isset($_GET['registration_successful']);
  $err_not_verified = isset($_GET['not_verified']);
  $success_verified = isset($_GET['verified']);

  function displayMessages($err_required, $err_invalid_login, $err_auth_required, $success_registration, $err_not_verified, $success_verified) {
    if ($err_required) {
      echo '<div class="alert alert-danger text-center">Username and password are required.</div>';
    }
    if ($err_invalid_login) {
      echo '<div class="alert alert-danger text-center">Incorrect username or password.</div>';
    }
    if ($err_auth_required) {
      echo '<div class="alert alert-danger text-center">An account is required to view that content. Please login or register.</div>';
    }
    if ($success_registration || $err_not_verified) {
      echo '<div class="alert alert-success text-center">A verification email was sent to your email address. Verify your email to continue.</div>';
    }
    if ($success_verified) {
      echo '<div class="alert alert-success text-center">Your email was verified. You are able to login now.</div>';
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title bg-primary text-white mt-5">
          <h3 class="text-center py-2">Login</h3>
        </div>
        
        <?php displayMessages($err_required, $err_invalid_login, $err_auth_required, $success_registration, $err_not_verified, $success_verified); ?>
        
        <div class="card-body text-center">
          <form action="controllers/login.php" method="POST">
            <input type="text" name="username" placeholder="username or email" class="form-control my-2">
            <input type="password" name="password" placeholder="password" class="form-control mb-3">
            <button class="btn btn-success" name="login" class="pt-3">Login</button>
            <div class="mt-2"><a href="password_reset.php">Forgot password?</a></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 
<?php require_once('partials/footer.php'); ?>