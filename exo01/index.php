<?php

$ligne = "";
$resulat = "";
$resulatInverse = "";

for($i = 0; $i < 50; $i++) {
    $ligne .= "*";
    /*
        $ligne = *
        $ligne = **
        $ligne = ***
    */

    $resulat = $resulat . "$ligne<br>";
    /*

    $resulat = *<br>
    $resulat = *<br>**<br>
    $resulat = *<br>**<br>***<br>

    */

    $resulatInverse = "$ligne<br>" . $resulatInverse;

    /*

    $resulatInverse = *<br>
    $resulatInverse = **<br>*<br>
    $resulatInverse = ***<br>**<br>*<br>

    */
}

echo $resulat;
echo '<br>';
echo $resulatInverse;