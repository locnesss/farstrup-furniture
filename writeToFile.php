<?php 

if (isset($_POST["stole"]) and isset($_POST["ja"])) {
    $customChair["Sæde højde"] = $_POST["højde"];
    $customChair["Sæde dybde"] = $_POST["dybde"];
    $customChair["Sæde vinkel"] = $_POST["vinkel"];
    $customChair["Ryghøjde"] = $_POST["rhøjde"];
}

if (isset($_POST["stole"])) {
    $_SESSION["qty"] = $_POST["qty"];
    $customChair["Antal"] = $_SESSION["qty"];
    $_SESSION["prodName"] = $_POST["prodName"];
    $customChair["Produkt navn"] = $_SESSION["prodName"];
    $customChair["Sub-total"] = $customChair["Pris"] * $customChair["Antal"];
    $customChair["Betræk"] = $_SESSION["betræk"];
    $customChair["Stel"] = $_SESSION["stel"];
    $_SESSION["customizedChair"] = $customChair;
    echo "Din varer er tilføjet til kurven";
}

if(isset($_POST["stole"])) {
    $chair = getFromFile();
    $jsonCart = json_encode($chair);
    $chair[] = $_SESSION["customizedChair"];
    $jsonCart = json_encode($chair);
    file_put_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json",$jsonCart);
    session_destroy();
}



?>