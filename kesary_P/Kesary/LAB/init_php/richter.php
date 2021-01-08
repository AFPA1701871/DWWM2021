<?php
echo"\n";
echo "------ECHELLE DE RICHTER------\n";
echo"\n";
$echelle = readline("Quelle est la magnitude :");
while ($echelle < 1 || $echelle > 9) {
    echo"Recommencez, Echelle de Richter est compris entre 1 et 9 :";
    $echelle = readline("Quelle est la magnitude :");
}
echo"\n";
switch ($echelle) {
    case 1:
        echo"1. Micro tremblement de terre, non ressenti";
        break;
    case 2:
        echo"2. Très mineur, non ressenti mais détecté ";
        break;
    case 3:
        echo"3. Mineur, causant rarement des dommanges";
        break;
    case 4 :
        echo"4. Léger, secousses notabless d'objets à l'intérieur des maisons";
        break;
    case 5 :
        echo"5. Modéré, légers dommages aux édifices bien construits";
        break;
    case 6:
        echo"6. Fort, destructeur dans des zones allant jusqu'à 180 kilomètres à la ronde si elles sont peuplées";
        break;
    case 7:
        echo"7. Majeur, dommages modérés à sévères dans des zones plus vastes";
        break;
    case 8:
        echo"8. Important, dommages sérieux dans des zones à des centaines de kilomètres à la ronde";
        break;
    default:
         echo"9. Dévastateur, dévaste des zones sur des milliers de kilomètres à la ronde";
        break;
}
?>