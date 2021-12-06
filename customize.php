<?php 
if (array_key_exists("nulstil", $_POST)) {
    unset($_SESSION["Materialer"]);
}
?>

<form method="post" name="materialer">
    <?php 
    if (isset($_SESSION["Materialer"])) {
        echo ("Du har valgt ");
        echo $_SESSION["betræk"]; 
        echo " og ";
        echo $_SESSION["stel"]; 
        ?> 
        
        <button name="nulstil"> Nulstil </button> 
    <?php       
} 
    else { ?>

        <p>Vælg materiale og stel</p>

        <label for="betræk">Vælg betræk:</label>
            <select name="betræk">
                <option value="Tekstil" > Tekstil </option>
                <option value="Læder" > Læder (+2000 kr) </option>
            </select>
    <br>
    <label for="stel">Vælg stel:</label>
        <select name="stel">
            <option value="Bøgetræ">Bøgetræ</option>
            <option value="Metal">Metal (+3000kr)</option>
        </select>
    <button type="submit" name="Materialer">Gem</button>
</form>

<?php }

?>

<?php 

if (isset($_SESSION["Materialer"])) {
    if ($_SESSION["betræk"] == "Læder") {
        $customChair["Pris"] = $customChair["Pris"] + 2000 ;
        }
    if ($_SESSION["stel"] == "Metal") {
        $customChair["Pris"] = $customChair["Pris"] + 3000;
        }
}

?>

<p>Vil du justere produktet yderligere?</p>

<form method="post">
<button type="submit" name="ja"> Ja</button>
</form>


<?php



?>


<h3>Prisen på stolen er <?php echo($customChair["Pris"]); ?> kr </h3>
<hr>

<form method="post" name="stol">

<?php
if (isset($_POST["ja"])) {  ?>


    <label for="højde">Sædehøjde:</label>
        <select name="højde">
            <option value= <?php echo $customChair["Sæde højde"] - 5 ?>> <?php echo $customChair["Sæde højde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde højde"] ?>> <?php echo $customChair["Sæde højde"] ?> </option>
            <option value= <?php echo $customChair["Sæde højde"] + 5 ?>> <?php echo $customChair["Sæde højde"] + 5 ?> </option>
        </select>
    
    <br>

    <label for="dybde">Sædedybde:</label>
        <select name="dybde">
            <option value= <?php echo $customChair["Sæde dybde"] - 5 ?>> <?php echo $customChair["Sæde dybde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde dybde"] ?>> <?php echo $customChair["Sæde dybde"] ?> </option>
            <option value= <?php echo $customChair["Sæde dybde"] + 5 ?>> <?php echo $customChair["Sæde dybde"] + 5 ?> </option>
        </select>
   
    <br>
    
    <label for="vinkel">Sædevinkel:</label>
        <select name="vinkel">
            <option value= <?php echo $customChair["Sæde vinkel"] - 5 ?>> <?php echo $customChair["Sæde vinkel"] - 5 ?> </option>
            <option value= <?php echo $customChair["Sæde vinkel"] ?>> <?php echo $customChair["Sæde vinkel"] ?> </option>
            <option value= <?php echo $customChair["Sæde vinkel"] + 5 ?>> <?php echo $customChair["Sæde vinkel"] + 5 ?> </option>
        </select>
    
    <br>

    <label for="rhøjde">Ryg højde:</label>
        <select name="rhøjde">
            <option value= <?php echo $customChair["Ryghøjde"] - 5 ?>> <?php echo $customChair["Ryghøjde"] - 5 ?> </option>
            <option value= <?php echo $customChair["Ryghøjde"] ?>> <?php echo $customChair["Ryghøjde"] ?> </option>
            <option value= <?php echo $customChair["Ryghøjde"] + 5 ?>> <?php echo $customChair["Ryghøjde"] + 5 ?> </option>
        </select>
    
    
    <br>
<?php } ?>