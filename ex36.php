<html>
  <table border=1>
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>

  <?php
include "conn/conn.php";

$sql = "SELECT employeeid, fname, lname FROM Employees";
$result = $conn->query($sql);


while($row = $result->fetch_assoc()) {
  echo "<tr> <td>" . $row["employeeid"]. "<td>" . $row["fname"]. " " . $row["lname"];
}

$conn->close();
?>

  </table>
</html>