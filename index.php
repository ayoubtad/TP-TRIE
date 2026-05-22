<?php
require_once 'tri.php';

/*
=============tri à bulles============
$t = [3, 1, 6, 0, 15, 5, 9];
$n = count($t);

echo "avant de trier : " . implode(", ", $t) . "\n";

echo "Tri à bulles :\n";

echo implode(", ", triBulles($t)) . "\n";

echo "L'algorithme tri à bulles a fait " .
    triBullesCompte($t) .
    " comparaisons pour trier un tableau de " .
    count($t) . " éléments.\n";

echo "Temps d'exécution : " . triBullesChrono($t) . " ms\n";


$tailles = [100, 500, 1000, 2000, 5000, 10000];

foreach ($tailles as $n) {
    $tab = range($n, 1);

    $nbComp = triBullesCompte($tab);
    $temps = triBullesChrono($tab);
    echo "n = $n : $nbComp comparaisons, $temps ms\n";
}
========tri par selection================
$tab = [5, 3, 8, 1, 4];
$trie = triSelection($tab);
echo implode(', ', $trie); // attendu : 1, 3, 4, 5, 8
// 
=============tri par inserion============
 */
$tab = [5, 3, 8, 1, 4];
$trie = triInsertion2($tab);
echo implode(', ', $trie); // attendu : 1, 3, 4, 5, 8
