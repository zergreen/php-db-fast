<?php include "session.php" ?>
<?php
    $idcust = $_SESSION['custid'];
    echo "<hr>";
    echo "IDCUST: $idcust";
    echo "<hr>";
?>


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
            <h1>Result&#128178;</h1>
            <hr class="hr">
        </center>
        <form action="VERIFY.php" method="POST">
            <!-- <div class="d-flex justify-content-end"><input type="submit" value="ADD"></div> <br> -->

            <table class="table table-hover table-bordered table-striped text-center">
                <caption>ผลลัพธ์ของคำสั่งซื้อ - รหัสลูกค้า <?php echo "$_POST[custid]"; ?> </caption>
                <thead class="table-dark">
                    <th>#</th>
                    <th>PName</th>
                    <th>PricePerUnit</th>
                    <th>StockQty</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php
                    $id = $_POST['custid'];
                    // echo "ID: $id <br>";

                    include "../conn/conn.php";

                    $sql = " SELECT * FROM Stocks ";

                    $result = $conn->query($sql);

                    $status = "<font color=green>Success</font>";

                    $i = 0;

                    // $arr = array();

                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        echo "
                            <tr>
                            <td>$i
                            <td>$row[ProductName]
                            <td>$row[PricePerUnit]
                            <td><input type=number value=$row[StockQty] step=10 min=0 max=9999>
                            <td>$status
                            </tr>
                            ";
                    }

                    $conn->close();

                    ?>
                </tbody>
            </table>

            <div class="d-flex bd-highlight">


                <div class="p-2 flex-grow-1 bd-highlight"><input type="button" onclick="history.back()" value="BACK"></div>
                <div class="p-2 bd-highlight"><input type="button" onclick="location.href='home.php' " value="HOME"></div>
                <!-- <div class="p-2 bd-highlight"><input type="reset" value="RESET"></div> -->


            </div>

        </form>

        <br>


        


    </div>
</body>

</html>

