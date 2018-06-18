<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from orders where order_ID =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: order.php?msg= Record successfully deleted !!");
exit();
mysqli_close($mysqli);
}
?>

