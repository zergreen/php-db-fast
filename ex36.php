<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully <br>";

$sql = "SELECT employeeid, fname, lname FROM Employees";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["employeeid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
}

$conn->close();
?>