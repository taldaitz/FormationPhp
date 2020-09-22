<?php
    include("fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation</title>
</head>
<body>

    <h1>Présentation des participants</h1>

    <p>
        <?php
            $prenom = "Thomas";
            echo saluer($prenom, "Aldaitz", 35);
        ?>
    </p>

    <p>
        <?php
            $prenom = "Jean";
            echo direAurevoir($prenom);
        ?>
    </p>
    
</body>
</html>