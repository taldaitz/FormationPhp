<?php
    $planning = [
        'Lundi' => 'Introduction',
        'Mardi' => 'Fonctions & Gestio du contexte',
        'Mercredi' => 'BDD & Projet',
        'Jeudi' => 'Fichier & BDDr',
        'Vendredi' => 'Projet BDDr & Cookies',
        'Samedi' => 'Les courses',
        'Dimanche' => 'Faire la sieste',
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 02</title>
    <style>
        tr:nth-child(even) {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    
    <h1>Mon Planning de la semaine</h1>

    <table>

    <?php

        foreach($planning as $jour => $programme) {
            echo "<tr><td>$jour</td> <td>$programme</td></tr>";
        }

    ?>

    </table>

</body>
</html>