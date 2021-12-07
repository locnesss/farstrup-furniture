<?php
include "./functions.php";
$title = "Betaling";
include "./header.php";
?>

<form method="post" name="kunde">
    <?php if (!isset($_POST["gem"])) { ?>
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
            "Fornavn" => $_POST["fname"],
            "Efternavn" => $_POST["lname"],
            "Adresse" => $_POST["addr"],
            "By" => $_POST["by"],
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
        $ordrernr = end($allOrders);
        echo "Dit ordrer nr er:" . " " . $ordrernr["OrdrerNr"];
    }
?>

</body>

</html>