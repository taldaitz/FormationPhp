<?php

function multiplication($chiffre1, $chiffre2) {

    return $chiffre1 * $chiffre2;
}

function division($chiffre1, $chiffre2) {
    if($chiffre2 == 0) 
        return false;

    return $chiffre1 / $chiffre2;
}

function operationPersonnelle($operation, $chiffre1, $chiffre2, $historique = true) {
    
    if($historique == true)
        historiserOperation($operation, $chiffre1, $chiffre2);

    if(!(is_numeric($chiffre1) && is_numeric($chiffre2)))
        return "Les valeurs saisies doivent etre des chiffres";

    switch($operation) {
        case 'multiplication':
            return multiplication($chiffre1, $chiffre2);
        break;

        case 'division':
            return division($chiffre1, $chiffre2);
        break;
    }

    return "Opération non reconnue";
}

function historiserOperation($operation, $chiffre1, $chiffre2) {
    if(isset($_SESSION["historique"])) {
        $_SESSION["historique"][] = [$operation, $chiffre1, 
                                                $chiffre2];
    } else {
       $_SESSION["historique"] = array(
           array($operation, $chiffre1, $chiffre2)
       ); 
    }
}