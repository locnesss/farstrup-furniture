<?php


function addCart() {
    $customchair = array(
        "Produkt navn" => $_POST["prodName"], 
        "Antal" => $_POST["qty"], 
        "Sæde højde" => $_POST["højde"],
        "Sæde dybde" => $_POST["dybde"],
        "Sæde vinkel" => $_POST["vinkel"],
        "Ryghøjde" => $_POST["rhøjde"],
        "Pris" => $_POST["pris"],
        "Sub-total" => $_POST["pris"] * $_POST["qty"]);
        //"sub" => $customchair["Antal"] * $customchair["pris"]);
    
    print_r($customchair);
}


?>

