<?php
    include("fonctions.php");
    $articles = recupererDerniersArticles();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Le Blog de Thomas</h1>
            <p class="lead">Avec de bien jolis articles !</p>
        </div>
    </div>

    <div class="container">

        <?php foreach($articles as $article) {   ?>
        <div class="article row">
            <h3 class="col-12"><?php echo $article['titre']; ?></h3>

            <img src="<?php echo $article['illustration']; ?>">

            <p class="col-12"><?php echo $article['contenu']; ?></p>

            <p class="col-12 date"><?php echo $article['date']; ?></p>
        </div>
        <?php }   ?>

    </div>

    
</body>
</html>