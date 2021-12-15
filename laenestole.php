<?php
session_start();


$title = "Lænestole";
include("./header.php");



$customChair = array(
    "Produkt navn" => null,
    "Antal" => null,
    "Sæde højde" => 47,
    "Sæde dybde" => 72,
    "Sæde vinkel" => 90,
    "Ryghøjde" => 116,
    "Pris" => 14995,
    "Sub-total" => null
);

include("./functions.php");


?>

<img src="./pictures/laenestol.jpg" alt="Farstrup Lænestol" width="250" height="250">

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
    } else { ?>

        <p>Vælg materiale og stel</p>

        <label for="betræk">Vælg betræk:</label>
        <select name="betræk">
            <option value="Tekstil"> Tekstil </option>
            <option value="Læder"> Læder (+2000 kr) </option>
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

    include "./customize.php";
    if (isset($_SESSION["Materialer"])) {
?>
    <label for="qty">Antal:</label>
    <input type="text" name="qty">
    <input type="hidden" name="prodName" value="Lænestol">
    <input type="hidden" id="pris" name="pris" value="14995">
    <button type="submit" name="stole">Tilføj til kurv</button>
<?php }

include "./writeToFile.php";


?>
</form>
</body>

</html>