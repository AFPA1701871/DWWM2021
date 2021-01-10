<?php

    echo "EXO 5 APRES-MIDI"."\n";
    $intVal= readline("Saisir nombre valeur : ");
    
    $val1 = readline ("Saisir valeur1 : ");
    $intPosition = 1;

    for ($intCompt=2; $intCompt<=$intVal; $intCompt++) {
        $val2 = readline("Saisir valeur".$intCompt." : "); 
        if ($val1<$val2){
            $intPosition = $intCompt;
            $val1 = $val2;
        };
    }
    echo "Le plus grand est ".$val1. " a la position ".$intPosition; 

    
?>