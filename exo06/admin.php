<?php
    session_start();
    if(empty($_SESSION['user'])) {
        if(!empty($_POST['login']) && !empty($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            if($password != 'admin' && $login != 'admin') {
                header('Location: login.php?error=2');
                die(); 
            } 

            $_SESSION['user'] = 'admin';

        }
        else {
            header('Location: login.php?error=1');
        }
    }

    $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'admin</title>
</head>
<body>
    
    <p>Bonjour Admin</p>
    <p>Vous avez accès à toutes les options du site</p>

    <a href="logout.php" >Se deconnecter</a>

</body>
</html>