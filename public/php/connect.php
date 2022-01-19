<?php
// Variable assignement
$servername = "localhost";
$username = "root";
$password = "";
$db = "groom-room";

// Create connection
$connect = new mysqli($servername, $username, $password, $db);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";
?>