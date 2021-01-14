<?php

    $intNombreVal = readline ("Saisir nombre de valeur : ");
    for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
        $tabVal[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
    }
    $intPositif=0; 
    $intNegatif=0;
    $intZero=0;

    foreach ($tabVal as $intVal) { 
        if($intVal==0){
            $intZero++;
        }elseif ($intVal >0){
            $intPositif++;
        }elseif($intVal<0){
            $intNegatif++;
        }   
    }
    echo "Nb zero ". $intZero;
    echo "\n";
    echo "Nb Positif :  ".$intPositif;
    echo "\n";
    echo "Nb Negatif ". $intNegatif;
?>