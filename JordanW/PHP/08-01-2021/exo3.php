<?php

    $intNombreVal = readline ("Saisir nombre de valeur : ");
    for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
        $tabVal[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
    }
    $intSomme=0;

    foreach ($tabVal as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "Somme : ". $intSomme;
    echo "\n";
    echo "Somme :  ".array_sum($tabVal);

?>