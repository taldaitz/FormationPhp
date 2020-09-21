<?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>

    <ul>
        <li> Nom : <?php echo $nom; ?></li>
        <li> Prénom : <?php echo $prenom; ?></li>
    </ul>
    
</body>
</html>