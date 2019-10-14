<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Opdracht2.css">
    <meta charset="UTF-8">
    <title>Monkey Business</title>
</head>
<body>
<img src="IMG/monkey-business.jpg" alt="Logo Monkey Business">
<p><b>Select your monkey!</b></p>
<img src="IMG/monkey_swings.png" alt="Aap hangend aan kabel">
<ul>

<?php
$apen = array("Baviaan", "Guereza", "Langoer", "Neusaap", "Tamarin", "Brulaap", "Halfaap", "Mandril");
foreach($apen as $aap){
    echo "<li><a href='https://www.google.nl/search?q=" . $aap . "&tbm=isch'>" . $aap . "</a></li>";
}
?>

</ul>
</body>
</html>