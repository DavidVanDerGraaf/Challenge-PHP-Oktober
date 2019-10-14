<?php /*Tim heeft geholpen met database connectie en data opvragen*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apen";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Opdracht3.css">
    <meta charset="UTF-8">
    <title>Monkey Business</title>
</head>
<body>
<img src="IMG/monkey-business.jpg" alt="Logo Monkey Business">
<p><b>Select your monkey!</b></p>
<img src="IMG/monkey_swings.png" alt="Aap hangend aan kabel">
<ul>
    <?php
    $sql="SELECT * FROM aap";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        while($lijn = $result->fetch_assoc()) {
            echo "<a href=' https://www.google.nl/search?q=".$lijn["soort"]."&tbm=isch'><li>".$lijn["soort"]."</li></a>";
        }
        } else {
        echo "null";
        }
    ?>
</ul>
</body>
</html>
