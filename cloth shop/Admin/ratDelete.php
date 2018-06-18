<?php include("../config.php");?>
<?php
$delete= $_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from rating where rating_id=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: rate.php?msg = Record successfuly Deleted!!");
exit();
mysqli_close($mysqli);
}
?>