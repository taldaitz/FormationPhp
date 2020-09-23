<?php

function sauvegarderProduit($ref, $nom, $description, $prix, 
                                $stock, $statut) 
{

    //1.Ouvrir la connection
    $db = ouvrirConnection();

    //2.Consommer la connection
    $sql = "INSERT INTO produit (ref, nom, description, prix, stock, statut)
            VALUES('$ref', '$nom', '$description', $prix, $stock, '$statut');
    ";

    requeteSansRetour($db, $sql);


    //3.fermer la connection
    fermerConnection($db);
}

function recupererProduitsEnVente() {
    $catalog = [];
    $db = ouvrirConnection();

    $sql = "SELECT * FROM produit WHERE statut = 'En Vente'";

    $result = requeteSelect($db, $sql);

    while($produit = mysqli_fetch_array($result)) {
        $catalog[] = $produit;
    }

    fermerConnection($db);

    return $catalog;
}

function ouvrirConnection() {
    return mysqli_connect('localhost', 'root', '', 'formationstore');
}

function requeteSansRetour($db, $sql) {
    mysqli_query($db, $sql);
}

function requeteSelect($db, $sql) {
    return mysqli_query($db, $sql);
}

function fermerConnection($db) {
    mysqli_close($db);
}