<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Club Lab 3 ROCHON-WOOD</title>
</head>
<body>
<?php
//identify which post to remove
$clubID=$_GET['clubID'];
//connect to db
$db = new PDO('mysql:host=172.31.22.43;dbname=Michele200532651', 'Michele200532651', 'I2FPuA0WV2');
//create sql delete statement
$sql = "DELETE FROM clubs WHERE clubID=:clubID";

//execute delete in the database
$cmd= $connect -> prepare($sql);
$cmd -> bindParam(':clubID', $clubID, PDO::PARAM_INT);
$cmd ->execute();
//disconnect
$db = null;
//redirect to updated feed
header('location:index.php');


?>
</body>
</html>
