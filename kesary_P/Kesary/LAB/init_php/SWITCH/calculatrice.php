<?php
echo"\n";
echo"------La Super Calculatrice------\n";
$nombre1 = readline("Entrez un nombre 1 ");
$nombre2 = readline("Entrez un nombre 2 ");
echo"\n";
echo"1. Addition\n";
echo"2. Soustractoin\n";
echo"3. Multiplication\n";
echo"4. Division\n";
echo"\n";
$choix = readline("Que voulez vous faire : \n");
switch ($choix) {
    case 1:
        echo "Le résultat de l'opération est : ".($nombre1 + $nombre2);
        break;
    case 2:
        echo "Le résultat de l'opération est : ".($nombre1 - $nombre2);
        break;
    case 3:
        echo "Le résultat de l'opération est : ".($nombre1 * $nombre2);
        break;
    default:
        echo "Le résultat de l'opération est : ".($nombre1/$nombre2);
        break;
}

?>