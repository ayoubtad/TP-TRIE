<?php

require_once 'tri.php';
/*$t = [4, 5, 8, 0, 1, 1];
echo "avant de trier : " . implode(', ', $t) . "\n";
echo "Tri  Bulles\n";
echo implode(', ', triBulles($t)) . "\n";
echo "l'algoritme du tri à bulle a fait " .
    triBullesCompte($t) .
    " comparaisons pur trier un tableau de" . count($t) . "elements";*/

$tailles = [100, 500, 1000, 2000, 5000, 10000];


foreach ($tailles as $n) {
    $tab = range($n, 1); // [n, n -1, ... , 2, 1] = cas defavorable
    $nbComp = triBullesCompte($tab);
    $temps = triBullesChrono($tab);
    echo "n = $n : $nbComp comparaisons , $temps ms\n";
}