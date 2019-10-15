<?php
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
    <link rel="stylesheet" href="Opdracht6.css">
    <meta charset="UTF-8">
    <title>Monkey Business</title>
</head>
<body>
<img src="IMG/monkey-business.jpg" alt="Logo Monkey Business">
<p><b>Select your monkey!</b></p>
<img src="IMG/monkey_swings.png" alt="Aap hangend aan kabel">
<table>
<?php
$sql = "SELECT aap.soort, leefgebied.omschrijving FROM ((aap_has_leefgebied INNER JOIN aap ON aap_has_leefgebied.idaap = aap.idaap) JOIN leefgebied ON aap_has_leefgebied.idleefgebied = leefgebied.idleefgebied)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($lijn = $result->fetch_assoc()) {
        echo "<tr>
            <td style='padding-right: 20px'><a href=' https://www.google.nl/search?q=".$lijn["soort"]."&tbm=isch'>".$lijn["soort"]."</a></td>
            <td><a href=' https://www.google.nl/search?q=".$lijn["omschrijving"]." leefgebied apen&tbm=isch'>".$lijn["omschrijving"]."</a></td>
        </tr>";
    }
} else {
    echo "Dit leefgebied staat niet in de database";
}
?>
</table>
</body>
</html>
