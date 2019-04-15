<?php
require_once('partials/header.php');

if (isset($_SESSION['uid']) && isset($_SESSION['username']) || isset($_SESSION['email'])) {
  header("location: dashboard.php?already_logged_in");
}

$email = $_GET['email'];
$hash = $_GET['hash'];

require_once('config/db.php');

$query = "SELECT * FROM users WHERE email='" . $email . "'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
$db_hash = $user['email_verif_hash'];

if ($hash != $db_hash) {
  header('location: forgot_password.php?link_failed_or_expired');
  exit();
}

function displayErrMessages()
{
  if (isset($_GET['required'])) {
    echo "<div class='alert alert-danger text-center'>Password and confirm password are required.</div>";
  }
  if (isset($_GET['passwords_must_match'])) {
    echo "<div class='alert alert-danger text-center'>Password and confirm password must match.</div>";
  }
  if (isset($_GET['db_failed'])) {
    echo "<div class='alert alert-danger text-center'>Setting your new password failed due to a problem on our end. Please try again or contact support.</div>";
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

        <?php displayErrMessages(); ?>

        <div class="card-body text-center">
          <form action="controllers/set_password.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="password" name="password" placeholder="Password" class="form-control my-2">
            <input type="password" name="password2" placeholder="Confirm Password" class="form-control mb-3">
            <button class="btn btn-success mt-2" name="reset-password" class="pt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>
