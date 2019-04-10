<?php require_once('partials/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-2">Reset Password</h3>
                    </div>
                    <div class="card-body text-center">
                        <form action="controllers/confirm_reset_password.php" method="POST">
                            <input type="password" name="password" placeholder="password" class="form-control my-2">
                            <input type="password" name="password2" placeholder="confirm password" class="form-control mb-3">
                            <button class="btn btn-success mt-2" name="reset-password" class="pt-3">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('partials/footer.php'); ?>