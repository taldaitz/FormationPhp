<?php

include('fonctions.php');

if( 
    !empty($_POST['titre']) &&
    !empty($_POST['contenu']) &&
    !empty($_POST['date']) &&
    isset($_FILES['illustration']['error']) &&
    $_FILES['illustration']['error'] == 0)
{
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $date = $_POST['date'];

    $tmpFile = $_FILES['illustration']['tmp_name'];
    $filename = $_FILES['illustration']['name'];

    sauvegarderArticle($titre, $contenu, $date, $tmpFile, $filename);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'Article</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h1>Création d'article</h1> 


        <form method="POST" enctype="multipart/form-data">

            <p class="form-row">
                <label>Titre</label>
                <input type="text" name="titre" class="form-control">
            </p>

            <p class="form-row">
                <label>Contenu</label>
                <textarea name="contenu" class="form-control"></textarea>
            </p>

            <p class="form-row">
                <label>Date</label>
                <input type="date" name="date" class="form-control">
            </p>

            <p class="form-row">
                <label>Illustration</label>
                <input type="file" name="illustration" class="form-control">
            </p>

            <input type="submit" value="Publier" class="btn btn-primary">

        </form>
    </div>

    
</body>
</html>