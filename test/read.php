<?php

$title = "READ";
$head_title = "Customer - READ&#10067;";

include("table-head.php");

$id = 'c001';
// $id = $_POST['id'];
// echo "ID: $id <br>";

include "../conn/conn.php";

$sql1 = " SELECT * FROM Supplys WHERE  IDCust='$id' ";

$sql = "  SELECT s.ProductName, s.PricePerUnit , s.StockQty, sup.Qty FROM Stocks AS s
                    INNER JOIN Supplys AS sup ON s.IDProduct=sup.IDProduct 
                    WHERE sup.IDCust='$id' ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "
        <tr>
        <td><input type=checkbox name=ids[] value=$row[ProductName] >
        <td>$row[ProductName]
        <td>$row[PricePerUnit]
        <td><input type=number value=$row[Qty] step=10 min=0 max=9999>
        <td>$row[StockQty]
        </tr>
        ";
}

$conn->close();


include("table-foot.php");
?>