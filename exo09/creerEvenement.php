<?php

if(
    !empty($_POST['date']) &&
    !empty($_POST['evenement']) &&
    !empty($_POST['participants'])
) {

    $file = fopen('csv/events.csv', 'a');

    //fputcsv($file, [$_POST['date'], $_POST['evenement'],$_POST['participants']], ';');
    fwrite($file, $_POST['date'] . ';' . $_POST['evenement']. ';' .$_POST['participants'] . "\n");

    fclose($file);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création Evenement</title>
</head>
<body>

    <h1>Création d'événement</h1>

    <form method="POST">
        <p>
            <input type="date" name="date">
            <input type="text" name="evenement">
            <input type="text" name="participants">
        </p>
        <input type="submit" value="Enregistrer">
    </form>

    <p>
        <a href="csv/events.csv">Telechargez le planning en CSV</a>
    </p>
    
</body>
</html>