<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from shout_box where id =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: chatting table.php?msg=Record successfuly Deleted!!");
exit();
mysqli_close($mysqli);
}
?>

