<?php
session_start();

$title = "Stabelstole";
include "./header.php";

$customChair = array(
    "Produkt navn" => null,
    "Antal" => null,
    "Sæde højde" => 47,
    "Sæde dybde" => 72,
    "Sæde vinkel" => 90,
    "Ryghøjde" => 116,
    "Pris" => 4215,
    "Sub-total" => null
);

include("./functions.php");

?>

<img src="./pictures/stabstol.jpg" alt="Farstrup Stabelstol" width="250" height="250">

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
            <option value="Læder"> Læder (+400 kr) </option>
        </select>
        <br>
        <label for="stel">Vælg stel:</label>
        <select name="stel">
            <option value="Bøgetræ">Bøgetræ</option>
            <option value="Metal">Metal (+500 kr)</option>
        </select>
        <button type="submit" name="Materialer">Gem</button>
</form>

<?php }

    if (isset($_SESSION["Materialer"])) {
        if ($_SESSION["betræk"] == "Læder") {
            $customChair["Pris"] = $customChair["Pris"] + 400;
        }
        if ($_SESSION["stel"] == "Metal") {
            $customChair["Pris"] = $customChair["Pris"] + 500;
        }
    }

    include "./customize.php";
    if (isset($_SESSION["Materialer"])) {
?>
    <label for="qty">Antal:</label>
    <input type="text" name="qty">
    <input type="hidden" id="prodName" name="prodName" value="Stabelstol">

    <input type="hidden" id="pris" name="pris" value="4215">
    <button type="submit" name="stole">Tilføj til kurv</button>
<?php }

    include "./writeToFile.php";
?>


</form>


</body>

</html>