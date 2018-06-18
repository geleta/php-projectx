<?php
session_start();
include('../config.php');

$sql="INSERT INTO orders (Full_Name, Email, Postal_Code,Country,City,Kebele,Phone_number,Warehouse_id,Dilivery_Address,Delivery_time,Delivery_date, Total_Amount) 
VALUES ('$_POST[fullname]','$_POST[email]','$_POST[pcode]', '$_POST[country]', '$_POST[city]', '$_POST[address]',  '$_POST[phone]','$_POST[warehouse]', '$_POST[delivery]', '$_POST[time]','$_POST[ddate]', '$_POST[amount]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  session_start();
if(session_destroy())
{
 echo "1 payment method has been processed";
 header("location: doyaprocess.php");
 //header("location: doyaprocess.php");
}

 mysqli_close($mysqli);
?> 
