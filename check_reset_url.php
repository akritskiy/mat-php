<?php
    session_start();
    require_once('config/db.php');
    // Start session
    // If uid is set, then... they're at the wrong URL, because they have no problems logging in... so... redirect them to the dashboard
    if (isset($_SESSION['uid'])) {
        header("location: dashboard.php?already_logged_in");
    }

    // Get the email and hash from the URL
    $URL_email = $_GET['email'];
    $URL_hash = $_GET['hash'];

    // Query the database for the hash of the account with that email
    $email_hash_query = "SELECT * FROM users WHERE email='" .$URL_email. "'";
    $result = mysqli_query($conn, $email_hash_query);
    $user = mysqli_fetch_assoc($result);
    $db_hash = $user['email_verif_hash'];

    // Check if the the URL hash matches the database hash
    // If it matches, allow the user to reset the password
    if ($URL_hash != $db_hash)
    {
        header('location: password_reset.php?non_matching_hashes');
        exit();
    }

    // If hashes match, set some session vars then redirect to complete the password reset:
    $_SESSION['uid'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['username'] = $user['username'];

    header("location: complete_password_reset.php");
    exit();
?>
