<?php
// session_start();
// session_register('select_db');
// $_SESSION["select_db"] = "student";
// session_register('stu_user');
// session_register('pass');
// session_register('error_msg');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
</head>
<body>
    <div>
        <center>
            <table>
                <tr>
                    <td><p><img src="https://media.tenor.com/hRiPtsp-m0IAAAAM/the-simpsons-homer-simpson.gif" alt="homer"></p></td>
                </tr>
                <tr>
                    <td><p><font><br><br><span>เข้าสู่ระบบ</span>&nbsp;</font></p></td>
                    <form action="check_pass.php" method="POST">
                        <div>
                            <div align="left"></div>
                            <table width="250">
                                <tr>
                                    <th width="240" scope="col">Username</th>
                                    <th width="240" scope="col">
                                        <input type="text" name="username" size="15">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <th>
                                        <input type="password" name="password">
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div align="center">
                                            <br>
                                            <input type="submit" value="ตกลง" name="accept">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <p align="left"><br></p>
                    </form>
                    <p align="center">
                        <?php 
                        if($_GET[error]==1){
                            echo "ไม่พบผู้ใช้ในระบบ";                            
                        }
                        ?>
                    </p>
                </tr>
            </table>
        </center>
    </div>
    <p><span><a href="index.php">กลับหน้าหลัก</a></span></p>
</body>
</html>