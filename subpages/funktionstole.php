<?php
session_start();

include("../functions.php");

$customChair = array(
    "Produkt navn" => null, 
    "Antal" => null, 
    "Sæde højde" => 47,
    "Sæde dybde" => 72,
    "Sæde vinkel" => 90,
    "Ryghøjde" => 116,
    "Betræk" => null,
    "Stel" => null,
    "Pris" => 32660,
    "Sub-total" => null);

if (isset($_POST["Materialer"])) {
    $_SESSION["Materialer"] = $_POST["Materialer"];
    $_SESSION["betræk"] =$_POST["betræk"];
    $_SESSION["stel"] = $_POST["stel"];
    $_SESSION["prodName"] = $customChair["Produkt navn"];
    //$customChair["Betræk"] = $_SESSION["betræk"];
    //$customChair["Stel"] = $_SESSION["stel"];
}
?>

<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionsstole</title>
</head>
<body>
<a href="../index.php">Hjem</a>
<a href="./funktionstole.php">Funktionstole</a>
<a href="./laenestole.php">Lænestole</a>
<a href="./spisebordsstole.php">Spisebordsstole</a>
<a href="./stabelstole.php">Stabelstole</a>
<a href="./sofaer.php">Sofaer</a>
<a href="./borde.php">Borde</a>
<a href="../kurv.php">Kurv</a>
<hr>
<img src="../pictures/funkstol.jpg" alt="Farstrup Funktion stol" width="250" height="250">

<form method="post" name="materialer">
    <?php 
    if (isset($_SESSION["Materialer"])) {
        echo ("Du har valgt ");
        echo $_SESSION["betræk"]; 
        echo " og ";
        echo $_SESSION["stel"]; 
        ?> 
        
        <button name="nulstil"> Nulstil </button> 
    <?php       
} 
    else { ?>

        <p>Vælg materiale og stel</p>

        <label for="betræk">Vælg betræk:</label>
            <select name="betræk">
                <option value="Tekstil" > Tekstil </option>
                <option value="Læder" > Læder (+2000 kr) </option>
            </select>
    <br>
    <label for="stel">Vælg stel:</label>
        <select name="stel">
            <option value="Bøgetræ">Bøgetræ</option>
            <option value="Metal">Metal (+3000kr)</option>
        </select>
    <button type="submit" name="Materialer">Gem</button>
</form>

<?php }

if (isset($_SESSION["Materialer"])) {
    if ($_SESSION["betræk"] == "Læder") {
        $customChair["Pris"] = $customChair["Pris"] + 2000;
        }
    if ($_SESSION["stel"] == "Metal") {
        $customChair["Pris"] = $customChair["Pris"] + 3000;
        }
}

include "../customize.php";

if (isset($_SESSION["Materialer"])) {
?>
    <label for="qty">Antal:</label>
        <input type="text" name="qty">
    <input type="hidden" name="prodName" value="Funktionstole">
    <input type="hidden" id="pris" name="pris" value="32660">
    <button type="submit" name="stole">Tilføj til kurv</button>
<?php }  

include "../writeToFile.php";

//session_destroy();

?>

</form>
</body>
</html>