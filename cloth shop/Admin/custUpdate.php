<?php
include '../config.php';

?>

<?php 
if (isset($_POST['submit'])){

echo $name=$_POST['name'];
echo $username=$_POST['username']; 
echo $phone=$_POST['phone'];
echo $email=$_POST['email']; 
echo $password=$_POST['password']; 
echo $Rpassword=$_POST['Rpassword'];
echo $select=$_POST['select'];
echo $city=$_POST['city'];
echo $adress=$_POST['adress'];
echo $post=$_POST['post'];
$ID=$_POST['ID'];

echo $query="update customer set FullName ='$name',UserName='$username',Phone='$phone',Email='$email',Password='$password',Re_Password='$Rpassword',Country='$select',City='$city',Adress='$adress',PostalCode='$post' where Cust_ID=$ID";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($mysqli);
header("location: customerTable.php?msg=record succesfully updated");
exit();
}

?>

