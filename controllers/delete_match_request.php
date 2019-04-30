<?php
session_start();
require_once('../config/db.php');

$s = $_SESSION;
$p = $_POST;
if (!isset($p['delete-match-request'])) {
	header("location: ../dashboard.php");
	exit();
}
if (!isset($s['uid']) || !isset($s['username']) || !isset($s['email'])) {
	header("location: ../dashboard.php?auth_required");
	exit();
}

$uid = $p['uid'];
$game = $p['game'];
$system = $p['system'];

$q = "DELETE FROM matchrequests WHERE userID='$uid' AND game='$game' AND system='$system' LIMIT 1;";
$res =  mysqli_query($conn, $q);
if (!$res) {
	header("location: ../dashboard.php?db_failure");
	exit();
}
header("location: ../dashboard.php");
exit();
