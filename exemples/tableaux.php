<?php

$tableau = array('a', 'b', 'c', 'd');

$raccourci = ['a', 'b', 'c', 'd']; // > Php 7.0

$tabVide = [];

$tab = [
    'toto' => 1,
    'titi' => 5.9,
];

/*
$tableau[0] = 'a'
$tableau[1] = 'b'
$tableau[2] = 'c'
$tableau[3] = 'd'*/

echo $tableau[2];

$tableau[] = 'e';
$tableau[] = 'f';
$tableau[] = 'g';
/*
$tableau[0] = 'a'
$tableau[1] = 'b'
$tableau[2] = 'c'
$tableau[3] = 'd'
$tableau[4] = 'e'
$tableau[5] = 'f'
$tableau[6] = 'g'
*/

foreach($tableau as $cle => $case) {
    echo '<br>';
    echo $cle . ' - ' . $case;
}