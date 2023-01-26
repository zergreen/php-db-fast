<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LIST-Table</title>

  <!-- boostrap css & js -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

  <div class="container">
    <center><h1>Customer Details&#128100;</h1> <hr class="hr"> </center>
    <form action='Verify_Delete.php' method='POST'>
      <table class="table table-hover table-responsive">
      <caption>ข้อมูลลูกค้าทั้งหมด</caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Sex</th>
            <th scope="col">Address</th>
            <th scope="col">Tel</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include "conn/conn.php";

          $sql = "SELECT * FROM Customers";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td><input type='checkbox' name='ids[]' value='$row[IDCust]' ></td>
              <td>$row[IDCust]</td>
              <td>$row[CustName]</td>
              <td>$row[Sex]</td>
              <td>$row[Address]</td>
              <td>$row[Tel]</td>
              <td><a href='Verify_Delete1.php?id=$row[IDCust]'> <i class='bi bi-trash'></i></a>
                  <a href='cust-one.php?id=$row[IDCust]'> <i class='bi bi-pencil'></i> </a></td>
            </tr>
            ";
          }
          $conn->close();
          ?>

        </tbody>
      </table>
      <input type='submit' value='Delete'>
    </form>
  </div>
</body>

</html>