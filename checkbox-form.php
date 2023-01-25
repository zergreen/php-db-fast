<form action="checkbox-form.php" method="post">

Which buildings do you want access to?<br />
<input type="checkbox" name="formDoor[]" value="c001" />Acorn Building<br />
<input type="checkbox" name="formDoor[]" value="c002" />Brown Hall<br />
<input type="checkbox" name="formDoor[]" value="c003" />Carnegie Complex<br />
<input type="checkbox" name="formDoor[]" value="D" />Drake Commons<br />
<input type="checkbox" name="formDoor[]" value="E" />Elliot House

<input type="submit" name="formSubmit" value="Submit" />

</form>

<?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>