<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 ROCHON-WOOD</title>
</head>
<body>  

<form action="includes/clubUpdates.php" method="POST">             
<table>
        <tr><th>Club ID</th><th>Club</th><th>Ground</th><th>Delete</th></tr>
        <tr>
        <td><input type = "text" name="clubID" placeholder="Club ID will be created automatically."></td>
        <td><input type = "text" name="clubName" placeholder="Click to Add a New Club Name"></td>
        <td><input type = "text" name="ground" placeholder="Click to Add the Ground"> </td>
        <td><a href="deleteClub.php">Delete this club.</a>
    </tr>
</table></form>  <?php 
        // connect
        $db = new PDO('mysql:host=172.31.22.43;dbname=Michele200532651', 'Michele200532651', 'I2FPuA0WV2');
        $sql = "SELECT * FROM clubs";
        $result = $conn->query($sql);
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $clubs = $cmd->fetchAll();

        if ($result->num_rows > 0) {
                echo "<tr><td>" . $row["club_Id"] . "</td><td>" . $row["clubName"] . "</td><td>" . $row["ground"];
            }
        else {
            echo "Michele, you suck at php";
        }
        $db = "null";

?>        

</body>
</html>
