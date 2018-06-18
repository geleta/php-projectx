<?php include("../config.php");?>
<?php
$delete= $_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from contact where contact_id=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: Contacts.php?msg = Record successfuly Deleted!!");
exit();
mysqli_close($mysqli);
}
?>