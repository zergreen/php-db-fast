<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Php</title>
</head>
<body>
    <?php
    $password = $_POST['pwd'];
    $username = $_POST['uname'];

    echo "Username : $username <br> Password : $password <br>";

    if($username == "admin" && $password == "admin1234"){
        echo "You are admin";

        // with include
        // include "home.html";

    //     echo '<script type="text/javascript">
    //        window.location = "index.php"
    //   </script>';

    session_start();

        $_SESSION['key'] = 'admin';

        // echo "<hr>";
        // echo $_SESSION['key'];
        // echo "<hr>";


    header('Location: index.php');

    } else {
        echo "You are not admin <br>";

        // include "home.php";
        echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    }

    ?>
</body>
</html>