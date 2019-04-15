<?php
  require_once('partials/header.php');
  if (isset($_SESSION['uid'])) {
    header("location: dashboard.php?already_logged_in");
  }

  function displayMessages() {
    if (isset($_GET['required'])) {
      echo '<div class="alert alert-danger text-center">Username, email, password, and confirm password are required.</div>';
    }
    if (isset($_GET['invalid_email'])) {
      echo '<div class="alert alert-danger text-center">Please enter a valid email address.</div>';
    }
    if (isset($_GET['username_already_exists'])) {
      echo '<div class="alert alert-danger text-center">That username is taken.</div>';
    }
    if (isset($_GET['email_already_has_account'])) {
      echo '<div class="alert alert-danger text-center">That email already has an account associated with it.</div>';
    }
    if (isset($_GET['confirm_password_not_match'])) {
      echo '<div class="alert alert-danger text-center">The password and confirm password must match.</div>';
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title bg-primary text-white mt-5">
          <h3 class="text-center py-2">Register</h3>
        </div>

        <?php displayMessages(); ?>

        <div class="card-body">
          <form action="controllers/register.php" method="POST">
            <input type="text" name="email" placeholder="email" class="form-control my-2">
            <input type="text" name="username" placeholder="username" class="form-control my-2">
            <input type="password" name="password" placeholder="password" class="form-control my-2">
            <input type="password" name="password2" placeholder="confirm password" class="form-control mb-3">
            <button class="btn btn-success" name="register" class="pt-3">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>
