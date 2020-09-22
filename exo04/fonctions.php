<?php

function saluer($prenom, $nom = "XXXX", $age =  20) {
    $message = "Hello $prenom $nom ! ";

    if($age >= 18) 
        $message .= "Vous êtes majeur.";
    else
        $message .= "Tu es mineur.";

    return $message;
}

function direAurevoir($prenom) {
    return "Au revoir $prenom";
}