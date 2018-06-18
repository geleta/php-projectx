<?php
include 'config.php';
$searchError = "";
$searchMessage = "";

function sanitizeString($var) {
    $var = htmlentities($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = trim($var);
    return $var;
}
$ItemId = sanitizeString($_POST['ItemId']);
$Quantity = sanitizeString($_POST['Quantity']);

if($Quantity<=Quantity){
    $updatePassQuery = "UPDATE stationery SET Quantity=Quantity-$Quantity WHERE ItemId='$ItemId'";
    $executeQuery = mysqli_query($dbh,$updatePassQuery);
if($executeQuery){
    echo " update successful";
    $message  = "update was successful";
    header("location: procurementhome.php");

    } else{
        echo "unsuccessful";
        $error = "update failed";
        // header("location: upstationery.php");
    }
}
else
{
    echo "no more itmes";
}
?>