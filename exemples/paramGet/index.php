<?php

    $numero = 0;
    if(!empty($_GET['numero'])) {
        $numero = $_GET['numero'];
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
    
    Nombre de click : <a href="index.php?numero=<?php echo $numero + 1; ?>">
    <?php echo $numero; ?>
            </a>

</body>
</html>