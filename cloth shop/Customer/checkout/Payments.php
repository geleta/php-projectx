<?php
session_start();
include('../config.php');

$sql="INSERT INTO orders (Full_Name, Email, Postal_Code, Address, Country, City, Phone, Warehouse_ID, Dilivery_Address, Total_Amount) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[pcode]', '$_POST[address]', '$_POST[country]', '$_POST[city]', '$_POST[phone]', '$_POST[warehouse]', '$_POST[delivery]', '$_POST[total]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  session_start();
if(session_destroy())
{
 echo "1 payment method has been processed";
 header("location: doyaprocess.php");

}

 mysqli_close($mysqli);
?> 
