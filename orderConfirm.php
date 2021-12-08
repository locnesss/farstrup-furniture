<?php 
session_start();

$title = "Ordrerbekræftelse";
include "./header.php";
include "./functions.php";

?>

<?php



$id = getOrders();
printCustomer($_SESSION["Ordrer"]);


?>







</body>
</html>