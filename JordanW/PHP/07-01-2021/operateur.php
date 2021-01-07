<?php
    $intVal1 = readline("Valeur 1 : ");
    $intVal2 = readline("Valeur 2 : ");
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