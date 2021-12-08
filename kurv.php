<?php

include "./header.php";
include("./functions.php");


?>




<table style="width:80%">
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
    <th> Action </th>
  </tr>

  <?php
  $customChair = getFromFile();
  foreach ($customChair as $i => $order) { ?>
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
      <td> <a href="?i=<?php echo $i; ?>"> Slet </a> </td>
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
    <td></td>
  </tr>

</table>
<hr>

<?php
if (isset($_GET["i"])) {
  deleteFromFile();
}
?>


<form action="./customerInfo.php" method="get">
  <button>Videre til betaling</button>
</form>

</body>
</html>