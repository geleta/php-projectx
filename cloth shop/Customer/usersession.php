<?php
include('config.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysqli_query($mysqli, "select UserName from customer where UserName='$check' ");
$row=mysqli_fetch_array($session);
$login_session=$row['UserName'];
if(!isset($login_session))
{
echo "You Failed !!";
 header('Location: Sign In.php');
}
?>