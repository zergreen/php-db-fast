<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ-Customer</title>

    <head>

        <!-- boostrap css & js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <!-- boostap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    </head>
</head>

<body>
    <div class="container">
        <center>
            <h1>Customer - Are You sure&#10067;</h1>
            <hr class="hr">
        </center>
        <form action="RESULT.php" method="POST">
            <!-- <div class="d-flex justify-content-end"><input type="submit" value="ADD"></div> <br> -->

            <table class="table table-hover table-bordered table-striped text-center">
                <caption>รหัสลูกค้า - <?php echo "$_POST[custid]"; ?> </caption>
                <thead class="table-dark">
                    <th>#</th>
                    <th>P-Id</th>
                    <th>PName</th>
                    <th>PricePerUnit</th>
                    <th>Qty</th>
                </thead>
                <tbody>
                    <?php

                    include "../conn/conn.php";



                    $prices = $_POST['prices'];

                    echo "size: ".count($prices)."<br>";

                    // echo "PRICE : $prices";
                    
                    $ids = $_POST['ids'];

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

            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight"><input type="button" onclick="history.back()" value="BACK"></div>
                <div class="p-2 bd-highlight"><input type="submit" value="ยืนยัน"></div>
                <?php echo " <input type=hidden name=custid value=$_POST[custid]> " ?>
            </div>

        </form>

        <br>





    </div>
</body>

</html>