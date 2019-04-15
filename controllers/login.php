<?php
session_start();
require_once('../config/db.php');
require_once('../config/swiftmailer.php');

if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location: ../login.php?required");
        exit();
    }

    $username_or_email_input = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM users WHERE username='" . $username_or_email_input . "' OR email='" . $username_or_email_input . "'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        header("location: ../login.php?invalid_login");
        exit();
    }

    $email = $user['email'];
    $email_verif_hash = $user['email_verif_hash'];
    $username = $user['username'];
    $active = $user['active'];

    // Check if account active. If inactive, send a new verif email.
    if ($active == 0) {
        // Start send verif email
        $verif_email = (new Swift_Message('Email confirmation for Matchisuru'))
            ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
            ->setTo([$email => 'New Matchisuru User'])
            ->setBody(
                "Dear $username,

                Thanks for creating an account with Matchisuru. Go to the link below to verify your email and activate your Matchisuru account.

                http://mat-php.herokuapp.com/controllers/verify_email.php?email=$email&hash=$email_verif_hash

                Take Care,
                The Matchisuru Team"
            );

        $result = $mailer->send($verif_email);
        // End send verif email

        header('location: ../login.php?not_verified');
        exit();
    }

    $check_password = password_verify($password, $user['password']);
    if ($check_password == true) {
        $_SESSION['uid'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['user'] = $user;
        header("location: ../dashboard.php");
        exit();
    }

    header("location: ../login.php?invalid_login");
    exit();
}

header("location: ../index.php");
exit();
