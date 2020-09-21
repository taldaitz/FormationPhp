<?php

//Affiche des messages de bienvenu

echo "Bienvenu tout le monde !<br/>";
echo "C'est la formation PHP + Mysql<br/>";

$prenom = "Thomas";
$nom = "Aldaitz";

$nom_complet = $prenom . " ";
$nom_complet .= $nom; // => $nom_complet = $nom_complet . $nom;

echo "Bonjour " . $nom_complet . "<br/>";
echo "Bonjour $nom_complet <br/>";
echo 'Bonjour $nom_complet <br/>';


for($i = 0; $i < 10; $i++)
{
    echo $i . '<br/>';
}

$compt = 0;

while($compt < 10) 
{
    echo $compt . '<br/>';
    $compt++;
}


?>