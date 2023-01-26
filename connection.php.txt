<?php
//connection to database name with session
$connection = mysql_connect("161.246.999.999","USER","PWD");
//used big $_SESSIOn
mysql_select_db($_SESSION["select_db"],$connection);
?>