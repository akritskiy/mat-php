<?php
    // For development:
    // $conn = mysqli_connect('localhost', 'root', 'Lunch@01', 'matchisuru');

    // if(mysqli_connect_errno()){
    //     echo 'Failed to connect to MySQL: '.mysqli_connect_errno();
    // }

    // For production server:
    // Get ClearDB connection info
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
