<?php
        session_start();
        require_once('../config/db.php');
        require_once('../config/swiftmailer.php');

    if (isset($_POST['login']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            header("location: ../login.php?required");
            exit();
        }
        $input = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $query = "SELECT * FROM users WHERE username='" .$input. "' OR email='" .$input. "'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        //Checks if the user input is in the database. If not, then an error message will appear.
        if(!$user)
        {
            header("location: ../login.php?invalid_login");
            exit();
        }

        //Find out if the user input is an email. Gets the username and email verfication hash
        if(filter_var($input, FILTER_VALIDATE_EMAIL)) {
            $email = $input;
            // Get username
            $username_query = "SELECT username FROM users WHERE email='" . $email . "'";
            $username_query_result = mysqli_query($conn, $username_query);
            $username_array = mysqli_fetch_assoc($username_query_result);
            $username = $username_array['username'];
            // Get email verification hash
            $email_verif_hash_query = "SELECT email_verif_hash FROM users WHERE email='" . $email . "'";
            $email_verif_hash_result = mysqli_query($conn, $email_verif_hash_query);
            $email_verif_hash_array = mysqli_fetch_assoc($email_verif_hash_result);
            $email_verif_hash = $email_verif_hash_array['email_verif_hash'];
        }
        else
        {
            $username = $input;
            // Get email
            $email_query = "SELECT email FROM users WHERE username='" .$username. "'";
            $email_query_result = mysqli_query($conn, $email_query);
            $email_array = mysqli_fetch_assoc($email_query_result);
            $email = $email_array['email'];
            // Get email verification hash
            $email_verif_hash_query = "SELECT email_verif_hash FROM users WHERE username='" .$username. "'";
            $email_verif_hash_result = mysqli_query($conn, $email_verif_hash_query);
            $email_verif_hash_array = mysqli_fetch_assoc($email_verif_hash_result);
            $email_verif_hash = $email_verif_hash_array['email_verif_hash'];
        }

        // Get the data from the 'active' column where it matches the user's entered email
        $active_col_query = "SELECT active FROM users WHERE email= '" .$email."'";
        $active_col_query_result = mysqli_query($conn, $active_col_query);
        $active_col = mysqli_fetch_assoc($active_col_query_result);


        // Checks to see if the user's account is active. If it's not active, then a verification email will be sent.
        if($active_col == 0)
        {
            // Start send verif email
            $verif_email = (new Swift_Message('Email confirmation for Matchisuru'))
                ->setFrom(['matchisuru@gmail.com' => 'Matchisuru Team'])
                ->setTo([$email => 'New Matchisuru User'])
                ->setBody("
                Dear $username,
                
                Thanks for creating an account with Matchisuru. Go to the link below to verify your email and activate your Matchisuru account.
                
                http://mat-php.herokuapp.com/verify_email.php?email=$email&hash=$$email_verif_hash
                
                localhost/mat-php/verify_email.php?email=$email&hash=$email_verif_hash
                
                Take Care,
                The Matchisuru Team
                ");

            $result = $mailer->send($verif_email);
            header('location: ../login.php?not_verified');
            // End send verif email
            exit();
        }
            $check_password = password_verify($password, $user['password']);
            if ($check_password == true) {
                $_SESSION['uid'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] = $user['password'];
                header("location: ../dashboard.php");
                exit();
            }
    }
header("location: ../index.php");
exit();
?>