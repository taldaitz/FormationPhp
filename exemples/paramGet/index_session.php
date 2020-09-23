<?php
    session_start();

    if(isset($_GET['reset'])) {
        session_destroy();
        header('Location: index_session.php?error=2');
    }

    if(!isset($_SESSION['nbClicks']))
        $_SESSION['nbClicks'] = 0;
    else
        $_SESSION['nbClicks'] = $_SESSION['nbClicks'] + 1;

    $numero = $_SESSION['nbClicks'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    Nombre de click : 
    <a href="index_session.php"><?php echo $numero; ?></a>
    <br>
    <a href="index_session.php?reset=1">Recommencer à zéro</a>

</body>
</html>