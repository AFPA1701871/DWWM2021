<?php
require("fonctionsEx2.php");

echo "\n";
echo "     *****    Table de multiplication    *****\n";
echo "\n";
$nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
verif($nombre);
tableMultiplication($nombre);
echo " \n";
$reponse = readline("Voulez-vous continuer ? ");

while (strtoupper($reponse) == strtoupper("o")) {
    $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    verif($nombre);
    tableMultiplication($nombre);
    echo " \n";
    $reponse = readline("Voulez-vous continuer ?\n");
}


?>