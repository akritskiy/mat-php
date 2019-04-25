<?php
require_once('../config/db.php');

$p = $_POST;
// route guard, if 'delete-account' not set in POST, this route was accessed by user entering URL
// into address bar -> redir to dash. From dash, if not logged in -> redir to login
if (!isset($p['delete-account'])) {
	header("location: ../dashboard.php");
	exit();
}

$email = mysqli_real_escape_string($conn, $p['email']);
$password = mysqli_real_escape_string($conn, $p['password']);

$q = "SELECT * FROM users WHERE email='$email' LIMIT 1;";
$res = mysqli_query($conn, $q);
$user = mysqli_fetch_assoc($res);

// check password
$password_check = password_verify($password, $user['password']);
if (!$password_check) { // password incorrect
	header("location: ../delete_account.php?password_incorrect");
	exit();
}

// password correct
$uid = $user['id'];
$q = "DELETE FROM profiles WHERE userID='$uid';";
$res = mysqli_query($conn, $q);
if ($res) {
	$q = "DELETE FROM users WHERE id='$uid';";
	$res = mysqli_query($conn, $q);
	if ($res) {
		header("location: logout.php?account_deleted"); // logout.php in current folder (controllers)
		exit();
	}
}
