<?php

$resulatAAfficher = "";

$db = mysqli_connect('localhost', 'root', '', 'formationStore');
mysqli_set_charset($db, 'utf8');


$sql = "SELECT * FROM Produit";

$result = mysqli_query($db, $sql);
while($produit = mysqli_fetch_array($result)) {
    $resulatAAfficher .= "<li>" . 
                        $produit["ref"] . '-'.
                        $produit["nom"] . ' : '.
                        $produit["prix"] .
    "</li>";
}

mysqli_close($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    

    <h1>Liste des produits</h1>

    <ul>
        <?php
        echo $resulatAAfficher;
        ?>
    </ul>

</body>
</html>