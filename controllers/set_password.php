<?php
session_start();
require_once('../config/db.php');

$p = $_POST;
// route guard
if (!isset($p['reset-password']) && !isset($p['change-password'])) {
  // if neither POST['reset-password'] or POST ['change-password'] are set,
  // this file was accessed via user typing the URL into address bar -> redir to dash
  // if user is unauth, dash will redir to login
  header("location: ../dashboard.php");
  exit();
}

$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

/*  The below $dest variable and if/else block is necessary to correctly route the user after
  processing their request. set_password handles requests from the reset_password and
  change_password routes.
  ROUTE: reset_password is for users who forgot their password. It has a route guard against users
  who are already logged in and validates their password reset link.
  ROUTE: change_password is for users who are logged in and want to change their password from the profile page. */
$dest = '';
if (isset($p['reset-password'])) $dest = 'reset_password.php';
else if (isset($p['change-password'])) $dest = 'change_password.php';

// check for password/password 2 empty or not equal
if (empty($password) || empty($password2)) {
  header("location: ../$dest?required");
  exit();
}
if ($password != $password2) {
  header("location: ../$dest?passwords_must_match");
  exit();
}

$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
$q = "UPDATE users SET password='$hashed_pass' WHERE email='$email';";
$result = mysqli_query($conn, $q); // Update queries return true if successful

if ($result == false) {
  header("location: ../$dest?db_failed");
  exit();
}

// if password reset successfully
if ($dest == 'reset_password.php') {
  header("location: ../login.php?success_password_reset");
  exit();
} else if ($dest == 'change_password.php') {
  header("location: ../profile.php?password_changed");
  exit();
}
