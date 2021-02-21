<?php
echo " entrez age";
$age=readline();
switch ($age ) { // switch tous seul n' est pas tres pratique pour les moin de 6 ans et plus de 12 ans
    case 6 :
        echo " poussin";
        break;
    case 7:
        echo " poussin";
        break;
    case 8 :
        echo " puppile";
        break;
    case 9 :
        echo " puppile";
        break;
    case 10 :
        echo " minime";
        break;
    case 11 :
        echo " minime";
        break;
    case 12 :
        echo " cadet";
        break;
       default : echo " vous ne rentrez pas dans la liste";
}
        
?>