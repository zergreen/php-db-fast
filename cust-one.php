<?php
echo "CUSTOMER By One <br>";
$a1 = $_POST['a1'];
print "ID : $a1 <br>";

// $tmp = $_GET['id'];
// if($tmp != null){
//   $a1 = $tmp;
// }

// By get Event
if($_GET['id'] != null){
  $a1 = $_GET['id'];
}

include "conn/conn.php";

$sql = " SELECT * FROM Customers WHERE idcust='$a1' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
  echo "ID: " . $row["IDCust"]. " - Name: " . $row["CustName"]. " " . $row["Sex"]. " - Address: ". $row["Address"] . " - Tel: ". $row["Tel"]."<br>";

$conn->close();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Sample Form</title>
    </head>
    <body>
        <center>
            <font>
                ใส่รหัสลูกค้าที่ต้องการเปลี่ยนแปลง
            </font><hr color="yellow">
            <form action="Update_Form.php" method="post">
                <h1>

                <?php
                  echo "<input type='hidden' name='a1' value='$row[IDCust]'>";
                  echo "ชื่อ<input type='text' name='a2' value='$row[CustName]'> <br>";
                  echo "เพศ<input type='text' name='a3' value='$row[Sex]'> <br>";
                  echo "ที่อยู่<input type='text' name='a4' value='$row[Address]'> <br>";
                  echo "เบอร์โทรศัพท์<input type='text' name='a5' value='$row[Tel]'> <br>";
                ?>                    
                    <input type="submit" value="ยืนยัน">
                    <input type="reset" value="ยกเลิก">
                </h1>
            </form>
        </center>
    </body>
</html>
