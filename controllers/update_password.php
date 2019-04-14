<?php
    session_start();
    require_once('../config/db.php');
    require_once('../config/swiftmailer.php');

    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    $new_password =  mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password =  mysqli_real_escape_string($conn, $_POST['password2']);
    $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $reset_email = $_SESSION['reset_user_email'];

    // Updates password column in the database to the password
    $query = "UPDATE users SET password='" .$new_hashed_password. "'WHERE email='" .$reset_email. "'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    $check_db_query = $conn->query("UPDATE users SET password='" .$new_hashed_password. "'WHERE email='" .$reset_email. "'");

    /*  Checks to see if any of the password fields are empty.
     If one or more fields are empty, then an error message will appear.
    */
    if(empty($password1) || empty($password2))
    {
        header('location: ../complete_password_reset.php?empty_fields');
        exit();
    }

    /*  Checks to see if the new password and confirmed password are the same.
      If they do not match, then a error message appears
    */
    if($password1 != $password2)
    {
        header('location: ../complete_password_reset.php?passwords_do_not_match');
        exit();
    }

    //  Notifies user that the new password has been reset
    if($check_db_query)
    {
        header('location: ../complete_password_reset.php?reset_successful');
        exit();
    }
?>