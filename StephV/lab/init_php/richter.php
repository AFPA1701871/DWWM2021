<?php
$scale=readline("Magnitude ?");

switch($scale){
    case 1 ;
        echo "Micro-tremblement de terre, non ressenti";
        break;
    case 2 ;
        echo "Très mineur, non ressenti mais détecté";
        break;
    case 3 ;
        echo "Mineur, causant rarement des dommages";
        break;
    case 4 ;
        echo "Léger, secousses notables d'objets à l'intérieur des maisons";
        break;
    case 5 ;
        echo "Modéré, blablabla";
        break;
    case 6 ;
        echo "Fort";
        break;
    case 7 ;
        echo "Majeur";
        break;
    case 8 ;
        echo "Important";
        break; 
    case 9 ;
        echo "Dévastateur";
        break; 
    case 10||11||12 :
        echo "Hell on Earth";
        break;    
    default:
        echo "hors-échelle";
        break;
                                                     
}
?>