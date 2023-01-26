    <?php
    $ids = $_GET['ids'];
    echo "IDS: $ids <br>";

    include "conn/conn.php";

    $sql = " DELETE FROM Customers WHERE idcust IN ($ids) ";

    echo "SQL: $sql <br>";

    $conn->query($sql);

    echo "Delete: id at <font color=red>$ids</font> success <br>";

    $conn->close();
    ?>

    <a href="index.html">Home</a>