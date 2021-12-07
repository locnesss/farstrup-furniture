<?php


if (isset($_POST["Materialer"])) {
    $_SESSION["Materialer"] = $_POST["Materialer"];
    $_SESSION["betræk"] =$_POST["betræk"];
    $_SESSION["stel"] = $_POST["stel"];
    $_SESSION["prodName"] = $customChair["Produkt navn"]; }



function getFromFile() {
    $jsonCart = file_get_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json");
    $customChair = json_decode($jsonCart, true);
    //print_r($notesArray);
    return $customChair;
}

function getOrders() {
    $jsonOrders = file_get_contents("C:\\xampp\\htdocs\\farstrup-furniture\\orders.json");
    $order = json_decode($jsonOrders, true);
    //print_r($notesArray);
    return $order;
}
