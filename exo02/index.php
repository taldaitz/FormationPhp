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

echo '<table>';

foreach($planning as $jour => $programme) {
    echo "<tr><td>$jour</td> <td>$programme</td></tr>";
}

echo '</table>';