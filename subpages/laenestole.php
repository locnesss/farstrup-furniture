<?php
session_start();

include("../functions.php");
include("../controller.php");

if (isset($_POST["Materialer"])) {
    $_SESSION["Materialer"] = $_POST["Materialer"];
    $_SESSION["betræk"] =$_POST["betræk"];
    $_SESSION["stel"] = $_POST["stel"];
}


$customChair = array(
    "Produkt navn" => null, 
    "Antal" => null, 
    "Sæde højde" => 47,
    "Sæde dybde" => 72,
    "Sæde vinkel" => 90,
    "Ryghøjde" => 116,
    "Pris" => 32660,
    "Sub-total" => null);



?>





<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lænestole</title>
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
<img src="../pictures/laenestol.jpg" alt="Farstrup Lænestol" width="250" height="250">

<?php

include "../shop.php";


/*


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
*/ ?>

<?php
if (isset($_SESSION["Materialer"])) {
?>

    <label for="qty">Antal:</label>
        <input type="text" name="qty">
        <input type="hidden" id="prodName" name="prodName" value="Lænestol">
        <input type="hidden" id="pris" name="pris" value="14995">


    <button type="submit" name="stole">Tilføj til kurv</button>

<?php } ?>


</form>
</body>
</html>

 <?php 
 //addCart();
 ?>