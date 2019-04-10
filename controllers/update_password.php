<?php
  // Note: this is incomplete
  $query = "UPDATE users SET password='1' WHERE email='" .$URL_email. "'";
  $result = mysqli_query($conn, $query);

  header('location: login.php?password_changed');
?>