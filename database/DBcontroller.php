<?php
$servername = "localhost";
$username = "root";
$password = "";
$shop="iwatch";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$shop);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
