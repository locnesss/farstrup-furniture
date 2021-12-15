<?php
if (array_key_exists("nulstil", $_POST)) {
    unset($_SESSION["Materialer"]);
    header("Refresh:0");
}


?>

<p>Vil du justere produktet yderligere?</p>
<form method="post">
    <button type="submit" name="ja"> Ja</button>
</form>
<h3>Prisen på stolen er <?php echo ($customChair["Pris"]); ?> kr </h3>
<hr>
<form method="post" name="stol">
    <?php if (isset($_POST["ja"])) {  ?>
        <label for="højde">Sædehøjde:</label>
        <select name="højde">
            <option value=<?php echo $customChair["Sæde højde"] - 5 ?>> <?php echo $customChair["Sæde højde"] - 5 ?> </option>
            <option value=<?php echo $customChair["Sæde højde"] ?>> <?php echo $customChair["Sæde højde"] ?> </option>
            <option value=<?php echo $customChair["Sæde højde"] + 5 ?>> <?php echo $customChair["Sæde højde"] + 5 ?> </option>
        </select>
        <br>
        <label for="dybde">Sædedybde:</label>
        <select name="dybde">
            <option value=<?php echo $customChair["Sæde dybde"] - 5 ?>> <?php echo $customChair["Sæde dybde"] - 5 ?> </option>
            <option value=<?php echo $customChair["Sæde dybde"] ?>> <?php echo $customChair["Sæde dybde"] ?> </option>
            <option value=<?php echo $customChair["Sæde dybde"] + 5 ?>> <?php echo $customChair["Sæde dybde"] + 5 ?> </option>
        </select>
        <br>
        <label for="vinkel">Sædevinkel:</label>
        <select name="vinkel">
            <option value=<?php echo $customChair["Sæde vinkel"] - 5 ?>> <?php echo $customChair["Sæde vinkel"] - 5 ?> </option>
            <option value=<?php echo $customChair["Sæde vinkel"] ?>> <?php echo $customChair["Sæde vinkel"] ?> </option>
            <option value=<?php echo $customChair["Sæde vinkel"] + 5 ?>> <?php echo $customChair["Sæde vinkel"] + 5 ?> </option>
        </select>
        <br>
        <label for="rhøjde">Ryg højde:</label>
        <select name="rhøjde">
            <option value=<?php echo $customChair["Ryghøjde"] - 5 ?>> <?php echo $customChair["Ryghøjde"] - 5 ?> </option>
            <option value=<?php echo $customChair["Ryghøjde"] ?>> <?php echo $customChair["Ryghøjde"] ?> </option>
            <option value=<?php echo $customChair["Ryghøjde"] + 5 ?>> <?php echo $customChair["Ryghøjde"] + 5 ?> </option>
        </select>
        <br>
    <?php } ?>