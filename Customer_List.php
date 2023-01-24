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

echo "Connected successfully <br>";

$sql = "SELECT * FROM Customers";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["IDCust"]. " - Name: " . $row["CustName"]. " " . $row["Sex"]. " - Address: ". $row["Address"] . " - Tel: ". $row["Tel"]."<br>";
//   echo "$row"."<br>";
  
}

$conn->close();
?>

<html>
<button onclick="history.back()">Go Back</button>
</html>