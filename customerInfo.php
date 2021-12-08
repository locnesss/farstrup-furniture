<?php
session_start();
include "./functions.php";
$title = "Betaling";
include "./header.php";
?>

<form method="post" name="kunde">
    <?php if (!isset($_SESSION["Gem"])) { ?>
        <label for="fname">Fornavn: </label>
        <input type="text" name="fname">
        <br>
        <label for="lname">Efternavn: </label>
        <input type="text" name="lname">
        <br>
        <label for="addr">Adresse: </label>
        <input type="text" name="addr">
        <br>
        <label for="fname">By: </label>
        <input type="text" name="by">
        <button type="submit" name="gem">Gem oplysninger</button>
</form>

<?php } else {
        $ordrer = array(
            "OrdrerNr" => null,
            "Fornavn" => $_SESSION["fname"],
            "Efternavn" => $_SESSION["lname"],
            "Adresse" => $_SESSION["addr"],
            "By" => $_SESSION["by"],
            "Ordrer" => getFromFile()
        );
        $emptyCart = "[]";
        file_put_contents("./cart.json", $emptyCart);
        $allOrders = getOrders();
        $allOrders[] = $ordrer;
        $i = 0;
        foreach ($allOrders as &$aOrde) {
            $i++;
            $aOrde["OrdrerNr"] = 0 + $i;
        }
        $jsonOrders = json_encode($allOrders, JSON_PRETTY_PRINT);
        file_put_contents("C:\\xampp\\htdocs\\farstrup-furniture\\orders.json", $jsonOrders);
        $_SESSION["Ordrer"] = end($allOrders);
        echo "Dit ordrer nr er:" . " " . $_SESSION["Ordrer"]["OrdrerNr"];
    }
    ?> <a href="./orderConfirm.php">Klik her for din Ordrebekræftelse</a> <?php


?>


<?php if (isset($_POST["gem"])) {
    $_SESSION["Gem"] = $_POST["gem"];
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["addr"] = $_POST["addr"];
    $_SESSION["by"] = $_POST["by"];
    header("Refresh:0");
}  ?>



</body>

</html>