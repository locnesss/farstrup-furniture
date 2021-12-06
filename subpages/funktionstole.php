<?php
session_start();
?>


<?php
include("../functions.php");
include("../controller.php");

$customChair = array(
    "Produkt navn" => null, 
    "Antal" => null, 
    "Sæde højde" => 47,
    "Sæde dybde" => 72,
    "Sæde vinkel" => 90,
    "Ryghøjde" => 116,
    "Pris" => 32660,
    "Sub-total" => null);

if (isset($_POST["Materialer"])) {
    $_SESSION["Materialer"] = $_POST["Materialer"];
    $_SESSION["betræk"] =$_POST["betræk"];
    $_SESSION["stel"] = $_POST["stel"];
    $_SESSION["prodName"] = $customChair["Produkt navn"];

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

<?php 

include "../customize.php";

/*
if (array_key_exists("nulstil", $_POST)) {
    unset($_SESSION["Materialer"]);
}
?>

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

?>

<?php 

if (isset($_SESSION["Materialer"])) {
    if ($_SESSION["betræk"] == "Læder") {
        $customChair["Pris"] = $customChair["Pris"] + 2000 ;
        }
    if ($_SESSION["stel"] == "Metal") {
        $customChair["Pris"] = $customChair["Pris"] + 3000;
        }
}

?>

<p>Vil du justere produktet yderligere?</p>

<form method="post">
<button type="submit" name="ja"> Ja</button>
</form>


<?php



?>


<h3>Prisen på stolen er <?php echo($customChair["Pris"]); ?> kr </h3>
<hr>

<form method="post" name="stol">

<?php
if (isset($_POST["ja"])) {  ?>


    <label for="højde">Sædehøjde:</label>
        <select name="højde">
            <option value= <?php echo $customChair["Sæde højde"] - 5 ?>> <?php echo $customChair["Sæde højde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde højde"] ?>> <?php echo $customChair["Sæde højde"] ?> </option>
            <option value= <?php echo $customChair["Sæde højde"] + 5 ?>> <?php echo $customChair["Sæde højde"] + 5 ?> </option>
        </select>
    
    <br>

    <label for="dybde">Sædedybde:</label>
        <select name="dybde">
            <option value= <?php echo $customChair["Sæde dybde"] - 5 ?>> <?php echo $customChair["Sæde dybde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde dybde"] ?>> <?php echo $customChair["Sæde dybde"] ?> </option>
            <option value= <?php echo $customChair["Sæde dybde"] + 5 ?>> <?php echo $customChair["Sæde dybde"] + 5 ?> </option>
        </select>
   
    <br>
    
    <label for="vinkel">Sædevinkel:</label>
        <select name="vinkel">
            <option value= <?php echo $customChair["Sæde vinkel"] - 5 ?>> <?php echo $customChair["Sæde vinkel"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde vinkel"] ?>> <?php echo $customChair["Sæde vinkel"] ?> </option>
            <option value= <?php echo $customChair["Sæde vinkel"] + 5 ?>> <?php echo $customChair["Sæde vinkel"] + 5 ?> </option>
        </select>
    
    <br>

    <label for="rhøjde">Ryg højde:</label>
        <select name="rhøjde">
            <option value= <?php echo $customChair["Ryghøjde"] - 5 ?>> <?php echo $customChair["Ryghøjde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Ryghøjde"] ?>> <?php echo $customChair["Ryghøjde"] ?> </option>
            <option value= <?php echo $customChair["Ryghøjde"] + 5 ?>> <?php echo $customChair["Ryghøjde"] + 5 ?> </option>
        </select>
    
    
    <br>

<?php 
} */


if (isset($_SESSION["Materialer"])) {
?>
    <label for="qty">Antal:</label>
        <input type="text" name="qty">
    <input type="hidden" name="prodName" value="Funktionstole">
    <input type="hidden" id="pris" name="pris" value="32660">


    <button type="submit" name="stole">Tilføj til kurv</button>

<?php }  

include "../writeToFile.php";
/*

if (isset($_POST["stole"])) {
    $_SESSION["qty"] = $_POST["qty"];
    $customChair["Antal"] = $_SESSION["qty"];
    $_SESSION["prodName"] = $_POST["prodName"];
    $customChair["Produkt navn"] = $_SESSION["prodName"];
    $customChair["Sub-total"] = $customChair["Pris"] * $customChair["Antal"];
    $_SESSION["customizedChair"] = $customChair;
    echo "Din varer er tilføjet til kurven";
    print_r($customChair);

}

if(isset($_POST["stole"])) {
    $chair = getFromFile();
    $jsonCart = json_encode($chair);
    $chair[] = $_SESSION["customizedChair"];
    $jsonCart = json_encode($chair);
    file_put_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json",$jsonCart);
}


*/
?>
</form>



</body>
</html>