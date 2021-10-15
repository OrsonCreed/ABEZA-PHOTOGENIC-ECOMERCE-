<?php // login.php
$hn = 'localhost:3308';
$db = 'abeza_photo';
$un = 'username';
$pw = 'password';
$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
  }
  function get_post($conn, $var)
  {
  return $conn->real_escape_string($_POST[$var]);
  }
  
?>