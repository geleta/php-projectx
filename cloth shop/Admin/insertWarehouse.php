

<?php
   include('../config.php');

$sql="INSERT INTO warehouse (Warehouse,Country, City, Address, PostalCode, Email,) VALUES  
('$_POST[wname]''$_POST[select]', '$_POST[city]', '$_POST[address]', '$_POST[pcode]', '$_POST[email]', )";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: add_warehouse.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 


