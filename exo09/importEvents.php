<?php

if(!(isset($_FILES['import']['error']) && 
    $_FILES['import']['error'] == 0)) {
    die("Problème lors du chargement du fichier");
}

$tmpName = $_FILES['import']['tmp_name'];
$name = $_FILES['import']['name'];

if(strpos($name, '.csv' ) === false) {
    die("Le fichier qui a été envoyé n'est pas un CSV");
}

$eventsToImport = [];
$tmpFile = fopen($tmpName, 'r');

while(!feof($tmpFile)) {
    $eventsToImport[] = fgetcsv($tmpFile, 0, ';');
}

fclose($tmpFile);
unlink($tmpName);

$file = fopen('csv/events.csv', 'a');

foreach($eventsToImport as $event) {
    fputcsv($file, $event, ';');
}

fclose($file);

header('Location: index.php');
