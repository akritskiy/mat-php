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
    $email_exists = mysqli_fetch_assoc($result);
    
    if (!$email_exists)
    {
        header('location: ../password_reset.php?email_not_found');
        exit();
    }

    $user_email = $email_exists['email'];
    $_SESSION['reset_user_email'] = $user_email;
    $username = $email_exists['username'];
    $password_reset_hash = password_hash(rand(1, 10000), PASSWORD_DEFAULT);
    $_SESSION['password_reset_hash'] = $password_reset_hash;
    $query = "UPDATE users SET email_verif_hash='" .$password_reset_hash. "' WHERE email='" .$user_email. "'";
    $update_hash_result = mysqli_query($conn, $query);

    if ($update_hash_result == false)
    {
        header('location: ../password_reset.php?db_failure');
        exit();
    }

        // Get the data from the 'active' column where it matches the user's entered email
        $active_col_query = "SELECT active FROM users WHERE email= '" .$user_email."'";
        $active_col_query_result = mysqli_query($conn, $active_col_query);
        $active_col_array = mysqli_fetch_assoc($active_col_query_result);
        $active_col = $active_col_array['active'];


        /* Get email verification hash from the database in
           order to send the verification email
        */
              // Get email verification hash
              $email_verif_hash_query = "SELECT email_verif_hash FROM users WHERE email='" .$user_email. "'";
              $email_verif_hash_result = mysqli_query($conn, $email_verif_hash_query);
              $email_verif_hash_array = mysqli_fetch_assoc($email_verif_hash_result);
              $email_verif_hash = $email_verif_hash_array['email_verif_hash'];

    // Checks to see if the user's account is active. If it's not active, then a verification email will be sent.
    if($active_col == 0)
    {
        header('location: ../password_reset.php?not_verified');
        // Start send verif email
        $verif_email = (new Swift_Message('Email confirmation for Matchisuru'))
            ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
            ->setTo([$user_email => 'New Matchisuru User'])
            ->setBody("
                Dear $username,
                
                Thanks for creating an account with Matchisuru. Go to the link below to verify your email and activate your Matchisuru account.
                
                http://mat-php.herokuapp.com/verify_email.php?email=$user_email&hash=$$email_verif_hash
                
                localhost/mat-php/verify_email.php?email=$user_email&hash=$email_verif_hash
                
                Take Care,
                The Matchisuru Team
                ");

        $result = $mailer->send($verif_email);
        // End send verif email
        exit();
    }

    // Start send password reset email
    $password_reset_email = (new Swift_Message('Reset Password for Matchisuru'))
        ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
        ->setTo([$user_email => 'Existing Matchisuru User'])
        ->setBody("
            Dear $username,
            
            Go to the link below to reset your password.
            
            http://mat-php.herokuapp.com/check_reset_url.php?email=$user_email&hash=$password_reset_hash
            
            localhost/mat-php/check_reset_url.php?email=$user_email&hash=$password_reset_hash
            
            Take Care,
            The Matchisuru Team
            ");

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