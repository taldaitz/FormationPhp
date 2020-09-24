<?php

$events = [];
$file = fopen('csv/events.csv', 'r');

while(!feof($file)) {
    $events[] = fgetcsv($file, 0, ';');
}

fclose($file);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">

        <h1>Mon Planning</h1>

        <table class="table">
            <thead>
                <th>Date</th>
                <th>Evenement</th>
                <th>Participants</th>
            </thead>
            <tbody>
            <?php
                foreach($events as $event) {
                    echo "<tr>";
                    echo "<td>" . $event[0] . "</td>";
                    echo "<td>" . $event[1] . "</td>";
                    echo "<td>" . $event[2] . "</td>";
                    echo "</tr>";
                }

            ?>
            </tbody>
        </table>

        <h2>Importer des événements</h2>
        <form action="importEvents.php" method="POST" enctype="multipart/form-data">
            <label>Importer vos événements au format CSV : </label>
            <input type="file" name="import"/>
            <input type="submit" value="Importer">
        </form>
    </div>
    
</body>
</html>