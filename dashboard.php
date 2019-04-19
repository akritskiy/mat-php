<?php
    require_once('partials/header.php');

    if (!isset($_SESSION['uid']))
    {
        header("location: login.php?auth_required");
        exit();
    }

    function displayDashboardMessages()
    {
        if (isset($_GET['updated_preferences']))
        {
            echo '<div class="alert alert-success text-center">Your account general preferences have been updated.</div>';
        }
        if (isset($_GET['could_not_update_preferences']))
        {
            echo '<div class="alert alert-danger text-center">Your account general preferences could not be updated.</div>';
        }
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="card">
                    <h5 class="card-header">Dashboard</h5>
                    <div>
                        <?php displayDashboardMessages() ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #fff !important;">User Info</h5>
                        <p class="card-text">UID: <?php echo $_SESSION['uid'] ?></p>
                        <p class="card-text">Username: <?php echo $_SESSION['username'] ?></p>
                        <p class="card-text">Email: <?php echo $_SESSION['email'] ?></p>
                        <a href="preferences_questionnaire.php" class="btn btn-primary">General Preferences Questionnaire</a>
                        <a href="games_questionnaire.php" class="btn btn-primary">Game Specific Questionnaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

