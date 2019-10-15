<?php /*Leefgebieden toevoegen gedaan met hulp van Tim */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apen";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['habitatname'])) {
    $value = $_POST['habitatname'];
    $sql = "INSERT INTO leefgebied (omschrijving) VALUES ('$value')";
    mysqli_query($conn, $sql);
    header("location: Opdracht5.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Opdracht5.css">
    <meta charset="UTF-8">
    <title>Monkey Business</title>
</head>
<body>
<img src="IMG/monkey-business.jpg" alt="Logo Monkey Business">
<form method="post" name="addhabitat">
    <input type="text" name="habitatname" placeholder="Voeg een habitat toe" style="padding 10px"><br><br>
    <input type="submit" value="Voeg je habitat toe">
</form>
<img src="IMG/monkey_swings.png" alt="Aap hangend aan kabel">
<ul>
    <?php
    $sql="SELECT * FROM leefgebied";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        while($lijn = $result->fetch_assoc()) {
            echo "<a href=' https://www.google.nl/search?q=".$lijn["omschrijving"]."&tbm=isch'><li>".$lijn["omschrijving"]."</li></a>";
        }
    } else {
        echo "null";
    }
    ?>
</ul>
</body>
</html>
