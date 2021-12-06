<?php
/*
function addCart() {
    $customChair = getFromFile();
    $jsonCart = json_encode($customChair);
    $customChair[] = $_SESSION["customizedChair"];
    $jsonCart = json_encode($customChair);
    file_put_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json",$jsonCart);
}
*/



function getFromFile() {
    $jsonCart = file_get_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json");
    $customChair = json_decode($jsonCart, true);
    //print_r($notesArray);
    return $customChair;
}

?>

