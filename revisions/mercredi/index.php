<?php
    session_start();

    include("fonctions/mathematique.php");
    $resultatPerso = "";

    if(!empty($_GET['operation']) &&
        !empty($_GET['chiffre1']) &&
        !empty($_GET['chiffre2']))
        {
            $resultatPerso = operationPersonnelle($_GET['operation'], 
                $_GET['chiffre1'],
                $_GET['chiffre2']);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Opérations du Mercredi</h1>

    <h2>Multiplication</h2>

    <ul>
        <li>3 x 4 = <?php  echo multiplication(3, 4); ?></li>
        <li>12 x 8 = <?php  echo multiplication(12, 8); ?></li>
        <li>5 x 9 = <?php  echo multiplication(5, 9); ?></li>
    </ul>

    <h2>Division</h2>
    <ul>
        <li>8 / 2 = <?php echo division(8, 2); ?></li>
        <li>5 / 4 = <?php echo division(5, 4); ?></li>
        <li>67 / 16 = <?php echo division(67, 16); ?></li>
    </ul>

    <h2>Opération perso</h2>

    <p>
        L'opération perso donne le resulat : 
        <?php echo $resultatPerso; ?>
    </p>

    <h2>Ancienne Opération perso</h2>

    <ul>
        <?php
        if(isset($_SESSION["historique"]))
        {
            foreach($_SESSION["historique"] as $operation) {
                echo '<li>' . $operation[0] . ' ' .$operation[1] . 
                ' et ' .  $operation[2] . " : " . 
                operationPersonnelle($operation[0], $operation[1], 
                $operation[2], false)
                . '</li>'; 
            }
        }
        ?>
    </ul>

</body>
</html>