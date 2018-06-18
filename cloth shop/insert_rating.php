<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=database', 'root', '');

if(isset($_POST["index"], $_POST["product_id"]))
{
 $query = "
 INSERT INTO rating(product_id, rating) 
 VALUES (:product_id, :rating)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':product_id'  => $_POST["product_id"],
   ':rating'   => $_POST["index"]
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}


?>
