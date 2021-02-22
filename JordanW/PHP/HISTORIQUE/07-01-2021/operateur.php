<?php

    do{
        $intVal1 = readline("Valeur 1 : ");
    }while(is_numeric($intVal1)==false);

    do{
        $intVal2 = readline("Valeur 2 : ");
    }while(is_numeric($intVal2)==false);

    $strOperateur= readline("Saisir l'opérateur : ");
    
    echo $intVal1 . " " . $strOperateur . " " . $intVal2 . " = ";
    switch($strOperateur){
        case "+" :
            echo $intVal1 +$intVal2 ;        
            break;
        case "/" :
            echo $intVal1 /$intVal2; 
            break;
        case "-" :
            echo $intVal1 -$intVal2; 
            break;
        case "*" :
            echo $intVal1 *$intVal2 ;
            break;
        default:
            echo "Saisie incorrecte";
            break;
    }

?>