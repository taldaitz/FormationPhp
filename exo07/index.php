<?php
    include("fonctions.php");

    $catalog = recupererProduitsEnVente();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Liste des produits en Vente</h1>

        <hr>

        <table class="table">
            <thead>
                <th>Ref</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
            </thead>
            <tbody>
                <?php

                foreach($catalog as $produit) {
                    echo '<tr>';
                    echo '<td>' . $produit["ref"] . '</td>';
                    echo '<td>' . $produit["nom"] . '</td>';
                    echo '<td>' . $produit["description"] . '</td>';
                    echo '<td>' . $produit["prix"] . '</td>';
                    echo '<td>' . $produit["stock"] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>