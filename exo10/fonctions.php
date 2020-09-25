<?php

function recupererAuteurs() {
    $auteurs = [];
    $db = ouvrirConnection();

    $sql = "SELECT auteur.id, nom, prenom, COUNT(livre.id) 
            FROM auteur LEFT JOIN livre ON auteur.id = livre.auteur_id
            GROUP BY auteur.id, nom, prenom
            ORDER BY COUNT(livre.id) DESC";
    $result = requeteSelect($db, $sql);

    while($auteur = mysqli_fetch_array($result)) {
        $auteurs['auteur.id'] = [
            'nom' => $auteur['nom'],
            'prenom' => $auteur['prenom'],
            'livres' => recupererLivresParAuteur($auteur['id'])
        ];
    }

    fermerConnection($db);

    return $auteurs;
}

function recupererLivresParAuteur($auteurId) {
    $livres = [];
    $db = ouvrirConnection();

    $sql = "SELECT id, titre FROM livre WHERE auteur_id = $auteurId";
    $result = requeteSelect($db, $sql);

    while($livre = mysqli_fetch_array($result)) {
        $livres[] = $livre;
    }

    fermerConnection($db);
    return $livres;
}

function supprimerLivre($livreId) {
    $db = ouvrirConnection();

    requeteSansRetour($db, "DELETE FROM livre WHERE id = $livreId");

    fermerConnection($db);
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