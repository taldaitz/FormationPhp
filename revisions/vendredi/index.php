<?php
session_start();

if(!empty($_SESSION['mois'])) {
    $mois = $_SESSION['mois'];
} else {
    $mois = ["Janvier" => "Jour de l'an", 
            "Mai" => ["Fete du travail", "Armistice"],
            "Juillet" => ["Les vacances", "La fete nationale"],
            "Aout" => "Toujours les vacances",
            "Septembre" => "La rentrée des classes",
        ];
}

if(!empty($_POST['mois']) && !empty($_POST['fete'])) {
    $simpleMois = $_POST['mois'];
    $fete = $_POST['fete'];
    if(isset($mois[$simpleMois])) {
        if(is_array($mois[$simpleMois])) {
            $mois[$simpleMois][] = $fete;
        } else {
            $ancienneFete = $mois[$simpleMois];
            $mois[$simpleMois] = [$ancienneFete, $fete];
        }
    } else {
        $mois[$simpleMois] = $fete; 
    }

    $_SESSION['mois'] = $mois;
}
    

$htmlMois = ""; 
foreach($mois as $cle => $valeur) {
    $htmlMois .= "<tr>";
    $htmlMois .= '<td>' . $cle . '</td>'; 
    if(is_array($valeur))  {
        $htmlMois .= '<td>' . implode(', ', $valeur) . '</td>';
    } else {
        $htmlMois .= '<td>' . $valeur . '</td>'; 
    }
    $htmlMois .= "</tr>"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révisions</title>
</head>
<body>
    
    <h1>Festivité</h1>

    <table>
        <?php

            echo $htmlMois;

        ?>
    </table>

    <form method="POST">
        <p>Ajouter une festivité</p>
        <label>Mois : </label>
        <input type="text" name="mois">
        <label> Fête : </label>
        <input type="text" name="fete">

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>