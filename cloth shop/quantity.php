<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "database";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `product`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row3 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row3[1]</option>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <!-- Method Two -->quantity
        <select width="5">
            <?php echo $options;?>
        </select>

    </body>

</html>