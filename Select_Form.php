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

$begin = $_POST['begin'];
$end = $_POST['end'];

$sql = "SELECT * FROM Customers WHERE IDCust between '$_POST[begin]' and '$_POST[end]' order by IDCust";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["IDCust"]. " - Name: " . $row["CustName"]. " " . $row["Sex"]. " - Address: ". $row["Address"] . " - Tel: ". $row["Tel"]."<br>";
}

$conn->close();
?>

<html>
<button onclick="history.back()">Go Back</button>
</html>