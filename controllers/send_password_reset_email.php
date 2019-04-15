<?php
    session_start();
    require_once('../config/db.php');
    require_once('../config/swiftmailer.php');

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (empty($email))
    {
        header('location: ../password_reset.php?email_required');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location: ../password_reset.php?invalid_email");
        exit();
    }

    $query = "SELECT * FROM users WHERE email='" . $email. "'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if (!$user)
    {
        header('location: ../password_reset.php?email_not_found');
        exit();
    }

    // User was found...
    $user_email = $user['email'];
    $username = $user['username'];
    $active = $user['active'];
    $password_reset_hash = password_hash(rand(1, 10000), PASSWORD_DEFAULT);
    $query = "UPDATE users SET email_verif_hash='" .$password_reset_hash. "' WHERE email='" .$user_email. "'";
    $update_hash_result = mysqli_query($conn, $query);

    if ($update_hash_result == false)
    {
        header('location: ../password_reset.php?db_failure');
        exit();
    }

    // Start send password reset email
    $password_reset_email = (new Swift_Message('Reset Password for Matchisuru'))
        ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
        ->setTo([$user_email => 'Existing Matchisuru User'])
        ->setBody(
            "Dear $username,

            Go to the link below to reset your password.

            http://mat-php.herokuapp.com/check_reset_url.php?email=$user_email&hash=$password_reset_hash

            Take Care,
            The Matchisuru Team"
        );

    $send_email_result = $mailer->send($password_reset_email); // Note to self: send() returns an int w/ number of successful emails sent
    // End send password reset email

    if ($send_email_result == 0) {
        header("location: ../password_reset.php?email_failed_to_send");
        exit();
    }

    // if $result == 1, email was sent successfully
    header("location: ../password_reset.php?sent_reset_email&email=$user_email");
    exit();
?>
