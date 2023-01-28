TEST-SESSION

<?php
session_start();

// echo "<hr>";
// echo $_SESSION['key'];
// echo "<hr>";

if($_SESSION['key'] == 'admin'){
    echo "REAL";
} else {
    echo "FAKE";
    header('Location: login.html');
    exit;
}

?>