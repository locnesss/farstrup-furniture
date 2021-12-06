<?php
include("./functions.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>


    <title>Kurv</title>
</head>
<body>
    
<a href="index.php">Hjem</a>
<a href="./subpages/funktionstole.php">Funktionstole</a>
<a href="./subpages/laenestole.php">Lænestole</a>
<a href="./subpages/spisebordsstole.php">Spisebordsstole</a>
<a href="./subpages/stabelstole.php">Stabelstole</a>
<a href="./subpages/sofaer.php">Sofaer</a>
<a href="./subpages/borde.php">Borde</a>
<a href="kurv.php">Kurv</a>
<hr>


<table style="width:70%">
    <tr>
        <th>    Produkt navn    </th>
        <th>    Sæde Højde    </th>
        <th>    Sæde Dybde    </th>
        <th>    Sæde Vinkel    </th>
        <th>    Ryg højde    </th>
        <th>    Betræk    </th>
        <th>    Stel    </th>
        <th>    Antal    </th>
        <th>    Styk Pris    </th>
        <th>    Subtotal    </th>
    </tr>
    
    <?php 
    $customChair = getFromFile();
    foreach ($customChair as $order) { ?>
    <tr>
        <td> <?php echo $order["Produkt navn"]; ?> </td>
        <td> <?php echo $order["Sæde højde"]; ?> </td>
        <td> <?php echo $order["Sæde dybde"]; ?> </td>
        <td> <?php echo $order["Sæde vinkel"]; ?> </td>
        <td> <?php echo $order["Ryghøjde"]; ?> </td>
        <td> <?php echo $order["Betræk"]; ?> </td>
        <td> <?php echo $order["Stel"]; ?> </td>
        <td> <?php echo $order["Antal"]; ?> </td>
        <td> <?php echo $order["Pris"]; ?> </td>
        <td> <?php echo $order["Sub-total"]; ?> </td>
    </tr>
<?php } ?>

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
        <?php echo array_sum(array_column($customChair, "Sub-total")); ?> kr
      </td> </u></b>
    </tr>
    <tr>
      <th>hej med dig</th>
    </tr>

</table>


<pre>

<?php


?>

    </pre>

</body>
</html>

