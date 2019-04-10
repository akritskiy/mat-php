<?php
    require_once('../config/db.php');

    $email_verif_hash = password_hash(rand(1, 10000), PASSWORD_DEFAULT);
    $reset_email_or_username = mysqli_real_escape_string($conn, $_POST['reset']);
    $query = "SELECT * FROM users WHERE email='" . $reset_email_or_username. "'";
    $query2 = "SELECT * FROM users WHERE username='" . $reset_email_or_username. "'";
    $email_result = mysqli_query($conn, $query);
    $username_result = mysqli_query($conn, $query2);

    $user = mysqli_fetch_assoc($email_result);
    $user2 = mysqli_fetch_assoc($username_result);
    $db_email = $user['email'];
    $db_username = $user2['username'];


    if (!($db_email || $db_username)) {
        header('location: ../password_reset.php?invalid_reset_input');
        exit();
    }
    else{
    // Start send reset password email

    require_once('../config/swiftmailer.php');

    $reset_password_email = (new Swift_Message('Reset Password Email for Matchisuru'))
        ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
        ->setTo([$db_emaiil => 'Existing Matchisuru User'])
        ->setBody("
            Dear $db_username,
            
            Go to the link below to reset your account password.
            
            http://mat-php.herokuapp.com/confirm_reset_password.php?email=$db_email&hash=$email_verif_hash
            
            Take care,
            The Matchisuru Team
            ");

    $result = $mailer->send($reset_password_email);

    // End send reset password email
        header('location: ../password_reset.php?sent_reset_link');

    exit();
}
    header("location: ../index.php");
    exit();
?>