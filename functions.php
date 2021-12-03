<?php


function addCart() {
    $customChair = getFromFile();
    $jsonCart = json_encode($customChair);

    $customChair[] = array(
        "Produkt navn" => $_POST["prodName"], 
        "Antal" => $_POST["qty"], 
        "Sæde højde" => $_POST["højde"],
        "Sæde dybde" => $_POST["dybde"],
        "Sæde vinkel" => $_POST["vinkel"],
        "Ryghøjde" => $_POST["rhøjde"],
        "Pris" => $_POST["pris"],
        "Sub-total" => $_POST["pris"] * $_POST["qty"]);
        //"sub" => $customchair["Antal"] * $customchair["pris"]);
    $jsonCart = json_encode($customChair);
    file_put_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json",$jsonCart);
    
}




function getFromFile() {
    $jsonCart = file_get_contents("C:\\xampp\\htdocs\\farstrup-furniture\\cart.json");
    $customChair = json_decode($jsonCart, true);
    //print_r($notesArray);
    return $customChair;
}

?>

