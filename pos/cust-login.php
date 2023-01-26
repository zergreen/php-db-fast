<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER-LOGIN</title>
</head>
<body>
   <center><h1>Customer-ID</h1><hr color="red">
       </center>
       <p>กรอกเลข ID ของลูกค้า เพื่อดูข้อมูลเพิ่มเติม</p>
       <form action="READ.php" method="POST">
            <input type="text" value="c001" name="id">
            <br>
            <input type="submit" value="Search">
            <input type="reset" value="Reset">
        </form>
</body>
</html>