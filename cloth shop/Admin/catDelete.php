<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from category where Category_ID =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location:add_category.php?msg= Record successfuly Deleted!!");
exit();
mysqli_close($mysqli);
}
?>

