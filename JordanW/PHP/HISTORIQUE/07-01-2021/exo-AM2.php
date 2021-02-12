<?php

    echo "EXO 5 APRES-MIDI"."\n";
    do{
        $intVal= readline("Saisir nombre valeur : ");
    }while(is_numeric($intVal)==false);
    
    do{
        $intVal1= readline("Saisir valeur : ");
    }while(is_numeric($intVal1)==false);
    $intPosition = 1;

    for ($intCompt=2; $intCompt<=$intVal; $intCompt++) {
        do{
            $intVal2= readline("Saisir valeur : ");
        }while(is_numeric($intVal2)==false);
        if ($intVal1<$intVal2){
            $intPosition = $intCompt;
            $intVal1 = $intVal2;
        };
    }
    echo "Le plus grand est ".$intVal1. " a la position ".$intPosition; 

    
?>