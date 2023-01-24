<?php include "linkmis.php";
// ใช้ในการเชื่อมต่อกับฐานข้อมูล
$connection = mysql_connect($iplinkm, "USER", "PWD");
mysql_select_db("mis", $connection);
$monthname = array("","มกราคม","กุมภาพันธ์","มีนาคม","ธันวาคม");
?>