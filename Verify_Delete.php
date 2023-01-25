<?php
// $id = $_GET['id'];
// echo "ID : $id <br>";

// include "conn/conn.php";
// echo "<hr>";

// echo "ยืนยันว่าจะลบใช่ไหม <br>";

// $sql = "Select * FROM Customers WHERE IDCust='$id' ";

// $result = $conn->query($sql);

// $row = $result->fetch_assoc();

// echo "
// ID : $row[IDCust] <br>
// Name : $row[CustName] <br>
// Sex : $row[Address] <br>
// Tel : $row[Tel] <br>
// ";


// echo "
// <form action='Delete_Form.php' method='get'>
// <input type=hidden name=id value=$id>
// <input type='submit' value='ยืนยัน'>
// </form>
// <button onclick='history.back()'>ยกเลิก</button>
// ";

// $conn->close();


?>

<?php
//   $ids = $_POST['ids'];
//   if(empty($ids)) 
//   {
//     echo("You didn't select any buildings.");
//   } 
//   else 
//   {
//     $N = count($ids);

//     echo("You selected $N door(s): ");
//     for($i=0; $i < $N; $i++)
//     {
//       echo($ids[$i] . " ");
//     }
//   }
?>

<?php
include "conn/conn.php";

$ids = $_POST['ids'];
if(empty($ids)) 
{
    echo("You didn't select any buildings.");
} 
else 
{
    $N = count($ids);
    
    echo("You selected $N door(s): ");

    $tmp = "";
    for($i=0; $i < $N; $i++)
    {
        
        echo($ids[$i] . " ");
        
        // expect : 'c001','c002','c003',
        $tmp .= "'" . "$ids[$i]" . "'"  . ",";
    }

    echo "<br> tmp : $tmp";
    $tmp = substr($tmp, 0, -1);
    echo "<br> tmp : $tmp";
    
    $sql = " DELETE FROM Customers WHERE idcust IN ($tmp) ";
    echo "<br> sql : $sql";
    $conn->query($sql);

  }

  $conn->close();
  
?>

<?php
// $chk = null;
// $checkbox1 = $_POST['ids']; 
// foreach($checkbox1 as $chk1){
//     $chk .= $chk1.",";
// }
// echo "chk: $chk <br>";

// $chk = substr($chk, 0, -1);

// include "conn/conn.php";

// $sql = " DELETE FROM Customers WHERE idcust IN ($chk)  ";
// echo "SQL: $sql";
// // $conn->query($sql);

// $conn->close();
?>


<!-- echo "<a href='Delete_Form.php?id=$id'>ตกลง</a>"; -->