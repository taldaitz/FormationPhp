<?php
    session_start();

    $message = "";
    $user = null;
    if(!empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    

    if(!empty($_GET['error'])) {

        switch($_GET['error']) {
            case 1:
                $message = '<p class="alert alert-danger">
                    Pas d\'identifiants transmits.
                </p>';
            break;

            case 2:
                $message = '<p class="alert alert-danger">
                    Identifiants incorrects.
                </p>';
            break;
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Page de connexion</h1>
            <p class="lead">Vive bootstrap !</p>
        </div>
    </div>

    <?php echo $message; ?>

    <?php if($user == null) { ?>

    <form class="container" action="admin.php" method="POST">
        <div class="form-group">
            <label>Login</label>
            <input name="login" class="form-control">
        </div>

        <div class="form-group">
            <label>Mot de passe</label>
            <input name="password" type="password" class="form-control">
        </div>

        <input type="submit" value="Se connecter" class="btn-primary">
    </form>

    <?php } else { ?>

        <div class="container">
            <p class="row">
                Login : Vous êtes déjà connecté en tant qu'admin.
            </p>

            <p class="row">
                Mot de passe : *************
            </p>
        </div>

    <?php } ?>
    
</body>
</html>