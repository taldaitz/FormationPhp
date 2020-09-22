<?php
$nomComplet = "Thomas Aldaitz";

if(strlen($nomComplet) > 10) 
{
    echo '<span style="color:red;">' . $nomComplet . '</span>';
}
else 
{
    echo $nomComplet;
}


echo '<br>';

echo 'toto ' . 'titi';

$pays = ['France', 'Espagne', 'Portugal', 
            'Angleterre', 'Allemagne', 'Belgique'];

echo '<ul>';

foreach($pays as $element) {
    echo '<li>' . $element . '</li>';
}

echo '</ul>';

