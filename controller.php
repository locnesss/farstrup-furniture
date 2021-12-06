<?php

/*if(isset($_POST["stole"])) {
    addCart();
    //addCaart();
}
*/
/*
function addCart() {
    $customchair = array(
        "Produkt navn" => $_POST["prodName"], 
        "Antal" => $_POST["qty"], 
        "Sæde højde" => $_POST["højde"],
        "Sæde dybde" => $_POST["dybde"],
        "Sæde vinkel" => $_POST["vinkel"],
        "Ryghøjde" => $_POST["rhøjde"]);
    
    print_r($customchair);
}

*/

function addCaart() {
    if (isset($_POST["stole"])) {
        $customChair["Antal"] = $_POST["qty"];
        $_SESSION["prodName"] = $_POST["prodName"];
        $customChair["Produkt navn"] = $_SESSION["prodName"];
        $customChair["Sub-total"] = $customChair["Pris"] * $customChair["Antal"];
        $_SESSION["customChair"] = $customChair;
        echo "Din varer er tilføjet til kurven";
    }
}


?>