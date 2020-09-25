<?php

    $nom = null;

    if(isset($_GET['nom'])) {
        $nom = $_GET['nom'];

        setcookie('nom_utilisateur', $nom, time() + 3600 );
    }

    if($nom == null && isset($_COOKIE['nom_utilisateur']))
    {
        $nom = $_COOKIE['nom_utilisateur'];
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

<p>Bonjour, <?php

    if($nom != null) {
        echo $nom . ' !';
    } else {
        echo 'Je ne vous connait pas.';
    }

?></p>
    
</body>
</html>