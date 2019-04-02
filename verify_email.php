<?php
  $URL_email = $_GET['email'];
  $URL_hash = $_GET['hash'];

  require_once('config/db.php');
  $query = "SELECT * FROM users WHERE email='" .$URL_email. "'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);
  $db_hash = $user['email_verif_hash'];

  if ($URL_hash != $db_hash) {
    header('location: index.php?verification_failed');
    exit();
  }

  if ($user['active'] == 1) {
    header('location: login.php?verified');
    exit();
  }

  $query = "UPDATE users SET active='1' WHERE email='" .$URL_email. "'";
  $result = mysqli_query($conn, $query);
  
  header('location: login.php?verified');
  exit();
?>