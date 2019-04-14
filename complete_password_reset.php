<?php
    require_once('partials/header.php');
    function displayPasswordResetPageMessages()
    {
        if(isset($_GET['URL_hash_and_db_hash_match']))
        {
            echo '<div class="alert alert-danger text-center">Please enter a new password.</div>';
        }
        if(isset($_GET['passwords_do_not_match']))
        {
            echo '<div class="alert alert-danger text-center">Passwords do not match.</div>';
        }
        if(isset($_GET['reset_successful']))
        {
            echo '<div class="alert alert-success text-center">Password has been reset. Please login.</div>';
        }
        if(isset($_GET['empty_fields']))
        {
            echo '<div class="alert alert-danger text-center">There must be a password entered for each field.</div>';
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
                displayPasswordResetPageMessages();
                ?>
                <div class="card-body text-center">
                    <form action="controllers/update_password.php" method="POST">
                        <input type="password" name="password" placeholder="Password" class="form-control my-2">
                        <input type="password" name="password2" placeholder="Confirm Password" class="form-control mb-3">
                        <button class="btn btn-success mt-2" name="reset-password" class="pt-3">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('partials/footer.php'); ?>