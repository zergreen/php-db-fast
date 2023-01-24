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

$sql = "UPDATE Customers SET custname='$_POST[a2]', sex='$_POST[a3]', address='$_POST[a4]', tel='$_POST[a5]' WHERE idcust='$_POST[a1]'";

try {
    $result = $conn->query($sql);
    echo "UPDATE: data = <font color=red> '$_POST[a1]' </font> is Successful. <br>";
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