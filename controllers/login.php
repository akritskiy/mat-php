<?php
    session_start();
    require_once('../config/db.php');

    if (isset($_POST['login'])) {
        if(empty($_POST['username']) || empty($_POST['password'])) {
            header("location: ../login.php?required");
            exit();
        }

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $query = "SELECT * FROM users WHERE username='" .$username. "' OR email='" .$username. "'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($user['active'] == 0) {
                header('location: ../login.php?not_verified');
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
            
            header("location: ../login.php?invalid_login");
            exit();
        }
    }
    
    header("location: ../index.php");
    exit();
?>
