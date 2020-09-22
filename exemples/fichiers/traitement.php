<?php

if(isset($_FILES['fichier']['error']) && 
        $_FILES['fichier']['error'] == 0) {
    $temporaire = $_FILES['fichier']['tmp_name'];
    $nomReel = $_FILES['fichier']['name'];


    $resultat = move_uploaded_file($temporaire, 'files/'. $nomReel);

    if($resultat)
        echo "Fichier transmit !";
    else
        echo "Un problème est survenue lors du chargement";
}