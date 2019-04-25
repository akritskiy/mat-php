<?php
if (isset($_POST['logout']) || isset($_GET['account_deleted'])) {
	session_start();
	session_unset();
	session_destroy();
	$msg = '';
	if (isset($_GET['account_deleted'])) $msg = '?account_deleted';
	header("location: ../index.php$msg");
	exit();
}
