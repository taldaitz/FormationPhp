<?php

include('fonctions.php');

$message = 0;

if(
    !empty($_POST['ref']) &&
    !empty($_POST['nom']) &&
    !empty($_POST['description']) &&
    !empty($_POST['prix']) &&
    !empty($_POST['stock']) &&
    !empty($_POST['statut'])
    ) 
    {

        $ref = $_POST['ref'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $statut = $_POST['statut'];

        sauvegarderProduit($ref, $nom, $description, $prix, 
                    $stock, $statut);

        $message = 1;

    }
    else {
        $message = 2;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création Produit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h1>Nouveau Produit</h1>

        <hr>

            <?php
            switch($message) {
                case 1:
                    echo '<p class="alert alert-success">Produit créé.</p>';
                break;

                case 2:
                    echo '<p class="alert alert-danger">Veuillez saisir tous les champs.</p>';
                break;
            }
            ?>

        <form method="POST">
            <p class="form-row">
                <label>Ref</label>
                <input type="text" name="ref" class="form-control">
            </p>

            <p class="form-row">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control">
            </p>

            <p class="form-row">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </p>

            <p class="form-row">
                <label>Prix</label>
                <input type="number" name="prix" class="form-control">
            </p>

            <p class="form-row">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control">
            </p>

            <p class="form-row">
                <label>Statut</label>
                <select name="statut" class="form-control">
                    <option>En Vente</option>
                    <option>Caché</option>
                    <option>Réduction</option>
                </select>
            </p>

            <input type="submit" class="btn btn-success btn-lg">
            <input type="reset" class="btn btn-warning btn-lg">
        </form>
    </div>
</body>
</html>