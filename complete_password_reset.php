<?php
// start session
// if uid is set, then... they're at the wrong URL, because they have no problems logging in... so... redirect them to the dashboard

// get the email and hash from the URL
// query the DB for the hash of the account w/ that email
// check that the hash from the URL matches the hash in the DB
// if it matches, allow the user to reset the password
// if not, redirect them to the homepage or the login page and show an error msg if you feel like it
?>

<?php require_once('partials/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-dark">
                <div class="card-title text-white mt-5">
                    <h3 class="text-center py-2">Reset Password</h3>
                </div>
                <div class="card-body text-center">
                    <form action="controllers/update_password.php" method="POST">
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