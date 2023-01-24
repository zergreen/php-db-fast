<?php 
session_start();
//move username form post method into session for student page
$_SESSION[stu_user] = $_POST[username];
//move password from post method into session for student page
$_SESSION[stu_pass] = $_POST[password];
include "../connect/connection.php";
//query database for username & password
$sql = "SELECT std_id, password from gradstd_m WHERE std_id='$_SESSION[stu_user]' AND password='$_SESSION[stu_pass]'";
$result = mysql_query($sql);

if(mysql_num_rows($result)>0){
    while($resultlog=mysql_fetch_array($result)){
        header("Location: http://161.246.999.999/grade/student.php");
    }
}else {
    header("Location: http://161.246.999.999/include/login/login.php?error=1");
}
?>