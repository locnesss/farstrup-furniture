<?php 

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



?>