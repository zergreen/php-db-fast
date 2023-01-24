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

// $a1 = $_POST['a1'];
// $a2 = $_POST['a2'];
// $a3 = $_POST['a3'];
// $a4 = $_POST['a4'];
// $a5 = $_POST['a5'];

// echo "$a1 : $a2 : $a3 : $a4 : $a5";

$sql = "INSERT INTO Customers VALUES('$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[a5]')";

try {
    $result = $conn->query($sql);
    echo "Insert: data = <font color=red> '$_POST[a1]' </font> is Successful. <br>";
} catch (Exception $e){
    echo "Error: insert <font color=red> '$_POST[a1]' </font> to database <br>";
}

// check for error
// echo "insert complete";
$conn->close();
?>

<html>
<button onclick="history.back()">Go Back</button>
<input type="button" onclick="location.href='Customer_List.php';" value="See List" />
</html>