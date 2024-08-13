<?php
//connection to database
  define('db_server', 'localhost');
  define('db_username', 'root');
  define('db_password', '');
  define('db_name', 'student');
//send paraneters
  $conn = mysqli_connect(db_server, db_username, db_password, db_name);
//conditional for stablish connection
  if ($conn === false) {
      die("ERROR: Could not connect." . mysqli_connect_error());
  }
?>