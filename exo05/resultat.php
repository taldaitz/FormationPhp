<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$poste = $_POST['poste'];
$couleur = $_POST['couleur'];

$messageUpload = "Votre CV à mal été transmit";

if(empty($nom)) die("Veuillez saisir le Nom dans le formulaire");
if(empty($prenom)) die("Veuillez saisir le Prénom dans le formulaire");
if(empty($email)) die("Veuillez saisir le Mail dans le formulaire");
if(empty($poste)) die("Veuillez saisir le Poste dans le formulaire");

if(isset($_FILES['cv']['error']) && $_FILES['cv']['error'] == 0){
    $nomTemp = $_FILES['cv']['tmp_name'];
    $nomFichier = $prenom . "_$nom-CV-" . time();

    $nomOrigine = $_FILES['cv']['name'];

    $parts = explode('.', $nomOrigine);
    $extention = end($parts);
    $nomFichier .= '.' . $extention;

    if(move_uploaded_file($nomTemp, 'cv/'.$nomFichier)) {
        $messageUpload = "Votre CV a bien été reçu.";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récap</title>
    <style>
        .gras {
            font-weight: bold;
        }

        .Bleu {
            background-color: lightskyblue;
            border: 1px solid black;
        }

        .Jaune {
            background-color: lightyellow;
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <div class="<?php echo $couleur; ?>">    
        <table>
            <tr><td class="gras">Nom :</td><td><?php echo $nom;?></td></tr>
            <tr><td class="gras">Prenom : </td><td><?php echo $prenom;?></td></tr>
            <tr><td class="gras">Email : </td><td><?php echo $email;?></td></tr>
            <tr><td class="gras">Poste : </td><td><?php echo $poste;?></td></tr>
            <tr><td class="gras">CV : </td><td><?php echo $messageUpload;?></td></tr>
        </table>
    </div>
    
</body>
</html>