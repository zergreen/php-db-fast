<?php
$id = $_GET['id'];
echo "ID : $id <br>";

include "conn/conn.php";
echo "<hr>";

echo "ยืนยันว่าจะลบใช่ไหม <br>";

$sql = "Select * FROM Customers WHERE IDCust='$id' ";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo "
ID : $row[IDCust] <br>
Name : $row[CustName] <br>
Sex : $row[Address] <br>
Tel : $row[Tel] <br>
";


echo "
<form action='Delete_Form.php' method='get'>
<input type=hidden name=id value=$id>
<input type='submit' value='ยืนยัน'>
</form>
<button onclick='history.back()'>ยกเลิก</button>
";

$conn->close();


?>