<?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully <br>";
?>