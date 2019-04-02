<?php require_once('partials/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card bg-dark">
        <div class="card-title bg-primary text-white mt-5">
          <h3 class="text-center py-2">Login</h3>
        </div>
        <div class="card-body text-center">
          <form action="controllers/send_password_reset_email.php" method="POST">
            <input type="text" name="username" placeholder="username or email" class="form-control my-2">
            <button class="btn btn-success mt-2" name="send-password-reset-email" class="pt-3">Send password reset email</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>
