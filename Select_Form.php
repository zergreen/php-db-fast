<?php
// $cx = odbc_connect("my_db","","");

// $begin = $_POST['begin'];
// $end = $_POST['end'];

// $sql = "SELECT * FROM Customer WHERE custno between '$begin' and '$end' order by custno";
// $cur = odbc_exec($cx,$sql);

// while(odbc_fetch_row($cur)){
//     $name1 = odbc_result($cur,1);
//     echo "$name1";
// }

// odbc_close($cx);

?>

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

$begin = $_POST['begin'];
$end = $_POST['end'];

$sql = "SELECT * FROM Customers WHERE IDCust between '$begin' and '$end' order by IDCust";
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