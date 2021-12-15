<?php

if (isset($_POST["Materialer"])) {
    $_SESSION["Materialer"] = $_POST["Materialer"];
    $_SESSION["betræk"] = $_POST["betræk"];
    $_SESSION["stel"] = $_POST["stel"];
    $_SESSION["prodName"] = $customChair["Produkt navn"];
}



function getFromFile()
{
    $jsonCart = file_get_contents("./cart.json");
    $customChair = json_decode($jsonCart, true);
    //print_r($notesArray);
    return $customChair;
}

function getOrders()
{
    $jsonOrders = file_get_contents("./orders.json");
    $od = json_decode($jsonOrders, true);
    //print_r($notesArray);
    return $od;
}

function deleteFromFile()
{
    $cart = getFromFile();
    $index = $_GET["i"];
    unset($cart[$index]);
    //return $notesArray;
    $jsonCart = json_encode($cart);
    file_put_contents("./cart.json", $jsonCart);
    getFromFile();
    header("Location:kurv.php");
}


function printOrder($order)
{
    foreach ($order as $od) { ?>
        <tr>
            <td> <?php echo $od["Produkt navn"]; ?> </td>
            <td> <?php echo $od["Sæde højde"]; ?> </td>
            <td> <?php echo $od["Sæde dybde"]; ?> </td>
            <td> <?php echo $od["Sæde vinkel"]; ?> </td>
            <td> <?php echo $od["Ryghøjde"]; ?> </td>
            <td> <?php echo $od["Betræk"]; ?> </td>
            <td> <?php echo $od["Stel"]; ?> </td>
            <td> <?php echo $od["Antal"]; ?> </td>
            <td> <?php echo $od["Pris"]; ?> </td>
            <td> <?php echo $od["Sub-total"]; ?> </td>
        </tr>

    <?php } ?>
<?php }

function printCustomer($id)
{ ?>
    <table style="width:80%">
        <tr>
            <th colspan="2"> <?php echo "Ordre #:" . $id["OrdrerNr"] . "<br>" . "Navn: " . $id["Fornavn"] . " " . $id["Efternavn"] ?> </th>
            <th colspan="2"> <?php echo "Adresse: " . $id["Adresse"] . ", " . $id["By"]; ?></th>
            <th colspan="3"> Farstrup Furnitures A/S <br> Farstrupvej 21, 5471 Søndersø </th>
            <th colspan="2"> CVR-nr: 37217514 <br> Tel: +45 63838383 <br> Mail: info@farstrup.dk  </th>
        </tr>
        <tr>
            <th> Produkt navn </th>
            <th> Sæde Højde </th>
            <th> Sæde Dybde </th>
            <th> Sæde Vinkel </th>
            <th> Ryg højde </th>
            <th> Betræk </th>
            <th> Stel </th>
            <th> Antal </th>
            <th> Styk Pris </th>
            <th> Subtotal </th>
        </tr>
        <?php printOrder($id["Ordrer"]); ?>
        <tr>
            <td> <b><u> Dit total er: </u></b> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> <b><u>
                        <?php echo array_sum(array_column($id["Ordrer"], "Sub-total")); ?> kr
            </td> </u></b>
            <td></td>
        </tr>
    </table>
    <hr>

<?php
}






?>