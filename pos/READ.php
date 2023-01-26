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
            <h1>Customer - Product List&#128220;</h1>
            <hr class="hr">
        </center>
        <form action="" method="POST">
            <div class="d-flex justify-content-end"><input type="submit" value="ADD"></div> <br>

            <table class="table table-hover table-bordered table-striped text-center">
                <caption>รายการรวมสินค้าของลูกค้า - <?php echo "$_POST[id]"; ?> </caption>
                <thead class="table-dark">
                    <th>#</th>
                    <th>PName</th>
                    <th>PricePerUnit</th>
                    <th>Qty</th>
                    <th>Stock</th>
                </thead>
                <tbody>
                    <?php
                    $id = $_POST['id'];
                    // echo "ID: $id <br>";

                    include "../conn/conn.php";

                    $sql = " SELECT * FROM Supplys WHERE  IDCust='$id' ";

                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                            <td><input type=checkbox name=ids[] value=$row[IDCust] >
                            <td>$row[IDCust]
                            <td>$row[IDProduct]
                            <td><input type=number value=$row[Qty] step=10 min=0 max=9999>
                            </tr>
                            ";
                    }

                    $conn->close();

                    ?>
                </tbody>
            </table>

            <!-- <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight"><input type="submit" value="DELETE"></div>
                <div class="p-2 bd-highlight"><input type="reset" value="RESET"></div>
                <div class="p-2 bd-highlight"><input type="submit" value="UPDATE"></div>
            </div> -->

            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight"><input type="submit" value="DELETE"></div>
                <div class="p-2 bd-highlight"><input type="reset" value="RESET"></div>
                <div class="p-2 bd-highlight"><input type="submit" value="UPDATE"></div>
            </div>

        </form>

        <br>


        <div class="card">
            <div class="card-header">
                README.md
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <!-- <p>วิธีใช้งาน</p> -->
                    วิธีใช้งาน.
                    <ul>
                        <li>ADD : ไปที่หน้าเพิ่มสินค้า</li>
                        <li>UPDATE : เพิ่ม-ลด สินค้า [Qty] ในหน้าปัจจุบัน</li>
                        <li>DELETE : คลิกที่ช่อง # เพื่อเลือก สินค้าที่ต้องการลบ</li>
                    </ul>
                    <footer class="blockquote-footer">Contact to <cite title="Source Title">63050159 Phongsakorn Kawhaolai</cite> for more information</footer>
                </blockquote>
            </div>
        </div>


        <!-- <input type="number" size=4 value=10 step=10 min=0 max=9999> -->
    </div>
</body>

</html>