<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $ename=$_POST['name'];
echo  $uname=$_POST['username'];
echo $pass=$_POST['password'];
$id=$_POST['ID'];

echo $query="update employee  set Employee_Name ='$ename',Username='$uname',Password='$pass'where Employee_ID=$id";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($con);
header("location: Employee.php?msg=succes full update one record");
exit();
}

?>

