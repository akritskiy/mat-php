<?php
    require_once('partials/header.php');

    if (!isset($_SESSION['uid'])) {
        header("location: login.php?auth_required");
        exit();
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <h5 class="card-header">Dashboard</h5>
                <div class="card-body">
                    <h5 class="card-title" style="background-color: #fff !important;">User Info</h5>
                    <p class="card-text">UID: <?php echo $_SESSION['uid'] ?></p>
                    <p class="card-text">Username: <?php echo $_SESSION['username'] ?></p>
                    <p class="card-text">Email: <?php echo $_SESSION['email'] ?></p>
                    <a href="#" class="btn btn-primary">Start Player Match Up - Coming Soon.</a>
                </div>
            </div>
        </div>
    </div>
</div>
