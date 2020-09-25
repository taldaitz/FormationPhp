<?php

include('fonctions.php');
$auteurs = recupererAuteurs();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des auteurs</title>
</head>
<body>

<?php
foreach($auteurs as $auteur) { ?>
<div>
    <h2><?php echo $auteur['prenom'] . ' ' . $auteur['nom'] ?></h2>
        <ul>
            <?php foreach($auteur['livres'] as $livre) {
                echo "<li>" .$livre['titre'] ." - <a href=\"supprimerLivre.php?livreid=" .$livre['id'] ."\">Supprimer</a></li>";
            } ?>
        </ul>
</div>

<?php } ?>
    
</body>
</html>