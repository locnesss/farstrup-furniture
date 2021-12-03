<?php
include("../functions.php");
include("../controller.php");


?>
<hr>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stabelstole</title>
</head>
<body>
<a href="index.php">Hjem</a>
<a href="./funktionstole.php">Funktionstole</a>
<a href="./laenestole.php">Lænestole</a>
<a href="./spisebordsstole.php">Spisebordsstole</a>
<a href="./stabelstole.php">Stabelstole</a>
<a href="./sofaer.php">Sofaer</a>
<a href="./borde.php">Borde</a>
<a href="../kurv.php">Kurv</a>
<hr>
<img src="../pictures/stabstol.jpg" alt="Farstrup Stabelstol" width="250" height="250">

<h3>Prisen på stolen er 4215 kr <?php //echo($_POST["pris"]); ?> </h3>
<hr>


<form method="post" name="stol">
    <label for="højde">Sædehøjde:</label>
        <input type="text" name="højde">

    <label for="dybde">Sædedybde:</label>
        <input type="text" name="dybde">

    <label for="vinkel">Sædevinkel:</label>
        <input type="text" name="vinkel">

    <label for="rhøjde">Ryg højde:</label>
        <input type="text" name="rhøjde">

    <label for="qty">Antal:</label>
        <input type="text" name="qty">

    <input type="hidden" id="prodName" name="prodName" value="Stabelstol">
    
    <input type="hidden" id="pris" name="pris" value="4215">


    <button type="submit" name="stole">Tilføj til kurv</button>
</form>


</body>
</html>