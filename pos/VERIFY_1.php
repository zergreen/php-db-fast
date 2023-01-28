<form action="">
    <table border=1>
        <thead>
            <th>#</th>
        </thead>
        <tbody>
        <?php

include "../conn/conn.php";



$prices = $_POST['prices'];

echo "size: ".count($prices)."<br>";

echo "size0: ".$prices[0]."<br>";
echo "size1: ".$prices[1]."<br>";
echo "size2: ".$prices[2]."<br>";
echo "size3: ".$prices[3]."<br>";
echo "size4: ".$prices[4]."<br>";

// echo "PRICE : $prices";

$ids = $_POST['ids'];

echo "size0: ".$ids[0]."<br>";
echo "size1: ".$ids[1]."<br>";
echo "size2: ".$ids[2]."<br>";
echo "size3: ".$ids[3]."<br>";
echo "size4: ".$ids[4]."<br>";

echo "<hr>";
print_r($prices);
echo "<br>";
print_r($ids);
echo "<hr>";


$custid = $_POST['custid'];

echo "CUS-ID : $custid <br>";


echo count($ids);

if (empty($ids)) {
    echo ("You didn't select any buildings.");
} else {
    $N = count($ids);

    echo ("You selected $N door(s): ");

    $tmp = "";

    $qtys = null;
    for ($i = 0; $i < $N; $i++) {

        echo ($ids[$i] . " ");

        echo "<hr>";

        $pieces = explode(" ", $ids[$i]);
        // echo $pieces[0]; // piece1
        // echo $pieces[1]; // piece2

        // expect : 'c001','c002','c003',
        $tmp .= "'" . "$pieces[0]" . "'"  . ",";

        $qtys .= "'" . "$pieces[1]" . "'"  . ",";

        $sql2 = " INSERT INTO Supplys VALUES ('$custid','$pieces[0]',$prices[$i]); ";

        echo "SQL2: $sql2 <br>";


        echo "<hr>";


    }

    echo "<br> tmp : $tmp";
    $tmp = substr($tmp, 0, -1);
    echo "<br> tmp : $tmp";

    echo "<br> QTYS : $qtys";

    $sql = " SELECT * FROM Stocks WHERE IDProduct IN ($tmp) ";

    $sql1 = " INSERT INTO Supplys VALUES ('c001','p003',25); ";



    echo "<br> sql : $sql";
    echo "<br><br><br>";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "
<tr>
<th>$i
<td>$row[IDProduct]
<td>$row[ProductName]
<td>$row[PricePerUnit]
<td>$row[StockQty]
</tr>
";
    }
}

$conn->close();
?>
        </tbody>
    </table>
</form>