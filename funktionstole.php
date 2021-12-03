<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionsstole</title>
</head>
<body>
<a href="index.php">Hjem</a>
<a href="funktionstole.php">Funktionstole</a>
<a href="laenestole.php">Lænestole</a>
<a href="spisebordsstole.php">Spisebordsstole</a>
<a href="stabelstole.php">Stabelstole</a>
<a href="sofaer.php">Sofaer</a>
<a href="borde.php">Borde</a>
<hr>
<img src="billeder/funkstol.jpg" alt="Farstrup Funktion stol" width="250" height="250">
<hr>


<?php

$funktionStol = array("pris"=> 32660, "sædehøjde" => null ,"sædedybde" => null ,"sæde vinkel" => null,"ryghøjde" => null);

print_r($funktionStol);

echo "<hr>";

echo $funktionStol["pris"];

?>



</body>
</html>