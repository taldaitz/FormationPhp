<?php
    $lignes = 0;
    $colonnes = 0;

    if(!empty($_POST['lignes']) && !empty($_POST['colonnes'])) {
        $lignes = $_POST['lignes'];
        $colonnes = $_POST['colonnes'];

        echo "$lignes - $colonnes";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Saisir des dimensions</h1>

    <form method="POST">

        <fieldset>
            <legend>Dimensions</legend>
            <p>
                <label>Lignes : </label>
                <input type="text" name="lignes">
            </p>

            <p>
                <label>Colonnes : </label>
                <input type="text" name="colonnes">
            </p>

            <input type="submit" value="Dessiner">

        </fieldset>

    </form>


    <?php

        for($i = 0; $i < $lignes; $i++) {
            for($j = 0; $j < $colonnes; $j++) {
                echo '*';
            }
            echo '<br>';
        }

    ?>
    
</body>
</html>