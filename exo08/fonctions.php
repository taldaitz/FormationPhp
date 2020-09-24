<?php

function sauvegarderArticle($titre, $contenu, $date, $tmpFile, $filename) {

    $filename = 'illustrations/' . time(). '_' . $filename;
    if(!move_uploaded_file($tmpFile, $filename))
    {
        $filename = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1200px-No_image_available.svg.png';
    }

    $db = ouvrirConnection();

    $sql = "INSERT INTO `article`(`titre`, `contenu`, `date`, `illustration`) 
    VALUES ('$titre','$contenu','$date', '$filename')";

    requeteSansRetour($db, $sql);

    fermerConnection($db);
}

function recupererDerniersArticles() {
    $articles = [];
    $db = ouvrirConnection();

    $sql = "SELECT * FROM article ORDER BY date DESC LIMIT 10";

    $resultSet = requeteSelect($db, $sql);

    while($article = mysqli_fetch_array($resultSet)) {
        $articles[] = $article; 
    }

    fermerConnection($db);

    return $articles;
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