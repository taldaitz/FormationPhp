<?php
include('fonctions.php');

if(!empty($_GET['livreid'])) {
    $livreId = $_GET['livreid'];

    supprimerLivre($livreId);
}
header('Location: index.php');