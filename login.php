<?php
  require_once('partials/header.php');
  if (isset($_SESSION['uid'])) {
    header("location: dashboard.php?already_logged_in");
  }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title bg-primary text-white mt-5">
          <h3 class="text-center py-2">Login</h3>
        </div>
        
        <?php
        if (isset($_GET['required'])) {
          $Message = "Username and password are required.";
          echo '<div class="alert alert-danger text-center">' .$Message. '</div>';
        }
        if (isset($_GET['invalid_login'])) {
          $Message = "Incorrect username or password.";
          echo '<div class="alert alert-danger text-center">' .$Message. '</div>';
        }
        if (isset($_GET['auth_required'])) {
          $Message = "An account is required to view that content. Please login or register.";
          echo '<div class="alert alert-danger text-center">' .$Message. '</div>';
        }
        if (isset($_GET['registration_successful']) || isset($_GET['not_verified'])) {
          $Message = "A verification email was sent to your email address. Verify your email to continue.";
          echo '<div class="alert alert-success text-center">' .$Message. '</div>';
        }
        if (isset($_GET['verified'])) {
          $Message = "Your email was verified. You're able to login now.";
          echo '<div class="alert alert-success text-center">' .$Message. '</div>';
        }
        ?>
        
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