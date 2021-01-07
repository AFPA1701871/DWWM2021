<?php
    $age = readline("Quel est votre âge ?");
    switch($age){
        case 6 :
        case 7 :
            echo "Poussin";
            break;
        case 8 :
        case 9 :
            echo "Pupille";
            break;
        case 10 :
        case 11 :
            echo "Minime";
            break;
        case $age>11 :
            echo "cadet";
            break;
        default :
            echo "Trop jeune";
    }
?>