<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Matchisuru | Free Video Game Matchmaking Service</title>
</head>

<body>
  <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php'); ?>
