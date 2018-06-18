<?php
$searchError = "";
$searchMessage = "";

function sanitizeString($var) {
    $var = htmlentities($var);
    $var = strip_tags($var);
    $var = stripslashes($var);
    $var = trim($var);
    return $var;
}

$totalItem = sizeof($_POST['quantity']);
$quantity = $_POST['quantity'];
for($i=0;$i<$totalItem;$i++) {

    $CProduct_ID = sanitizeString($Product_ID[$i]);
    $Cquantity = sanitizeString($quantity[$i]);

    $quantityAvailable = mysqli_query("SELECT quantity FROM product WHERE Product_ID='$CProduct_ID ");
    $row = mysqli_fetch_array($quantityAvailable,MYSQLI_ASSOC); 
    $quantityDB = $row['quantity'];

    if($Cquantity<=$quantityDB){
        $updatePassQuery = "UPDATE quantity SET quantity=quantity-$Cquantity WHERE Product_ID='$CProduct_ID'";
        $executeQuery = mysqli_query($dbh,$updatePassQuery);
        if($executeQuery){
            echo " update successful";
            $message  = "update was successful";
            header("location: index.php");
        } else{
                echo "unsuccessful";
                $error = "update failed";
        }
    }
    else
    {
        echo "no more itmes";
    }
}

?>