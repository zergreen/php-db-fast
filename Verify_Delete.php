<head>
    <!-- boostrap css & js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<div class="container">
<center><h1>Are you sure&#10067;</h1> <hr class="hr"></center>

<table class="table table-hover table-bordered table-striped text-center">
    <thead class="table-dark">
        <th>#</th>
        <th>ID</th>
        <th>Name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Tel</th>
    </thead>
    <tbody>
        <?php

        include "conn/conn.php";



        $ids = $_POST['ids'];

        echo count($ids);
        if (empty($ids)) {
            echo ("You didn't select any buildings.");
        } else {
            $N = count($ids);

            echo ("You selected $N door(s): ");

            $tmp = "";
            for ($i = 0; $i < $N; $i++) {

                echo ($ids[$i] . " ");

                // expect : 'c001','c002','c003',
                $tmp .= "'" . "$ids[$i]" . "'"  . ",";
            }

            echo "<br> tmp : $tmp";
            $tmp = substr($tmp, 0, -1);
            echo "<br> tmp : $tmp";

            $sql = " SELECT * FROM Customers WHERE idcust IN ($tmp) ";
            echo "<br> sql : $sql";
            echo "<br><br><br>";
            $result = $conn->query($sql);
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo "
        <tr>
        <th>$i
        <td>$row[IDCust]
        <td>$row[CustName]
        <td>$row[Sex]
        <td>$row[Address]
        <td>$row[Tel]
        </tr>
        ";
            }
        }

        $conn->close();
        ?>

    </tbody>
</table>

<?php
// เอา comment ออกก็ได้เพื่อ log ดูค่า และ button & style ทำไว้ดัก อาจารย์เขา
// echo "<hr>";
// echo "<br> tmp : $tmp";
// echo "<input type='text' name='id' value=$tmp'> ";
echo "<button><a href=Delete_Form1.php?ids=$tmp style='color: #000000; text-decoration: none;'>ยืนยัน</a></button>";
?>
</div>