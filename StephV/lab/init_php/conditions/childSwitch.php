<?php
$age=readline("Saisissez l'âge de l'enfant");
    switch($age):        
        case 6 : 
        case 7 :  
            echo "poussin";
            break;
        case 8 :  
        case 9 :
            echo "pupille";
            break; 
        case 10 : 
        case 11 : 
            echo "minime";
            break;
        case 12 : 
            echo "cadet";
            break;               
        default :  
            echo "hors cat.";
            break;
        endswitch

?>