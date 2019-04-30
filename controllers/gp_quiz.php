<?php
// Alex Kritskiy and Pui Tam, 2019
session_start();
require_once('../config/db.php');

$p = $_POST;
if (!isset($p['submit_gp_quiz'])) { // route guard
  header("location: ../dashboard.php");
}

$numQuestions = 15;
$answers = [];
for ($i = 1; $i <= $numQuestions; $i++) {
  if (isset($p["Q$i"])) array_push($answers, $p["Q$i"]);
}
// Save answers in POST to an array, $answers. Values can be accessed by index. For example,
// $answers[0] corresponds to the user's answer to Q1, $answers[1] corresponds to Q2, and so on.
$answersJSON = json_encode($answers); // convert $answers to JSON

$s = $_SESSION;
$uid = $s['user']['id'];
$q = "SELECT * FROM generalpreferences WHERE userID='$uid' LIMIT 1;";
$res = mysqli_fetch_assoc(mysqli_query($conn, $q));

if (!$res) { // record doesn't exist
  $q = "INSERT INTO generalpreferences (userID, answers) VALUES ('$uid', '$answersJSON');";
  $res = mysqli_query($conn, $q);
  if ($res) {
    header("location: ../select_game.php");
    exit();
  } else {
    header("location: ../dashboard.php?error_saving_general_pref");
    exit();
  }
}
// record exists -> update
$q = "UPDATE generalpreferences SET answers='$answersJSON' WHERE userID='$uid' LIMIT 1;";
$res = mysqli_query($conn, $q);
if ($res) {
  header("location: ../select_game.php");
  exit();
} else {
  header("location: ../dashboard.php?error_saving_general_pref");
  exit();
}
