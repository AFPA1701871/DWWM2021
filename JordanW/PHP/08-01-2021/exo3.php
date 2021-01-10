<?php

    $intNombreVal = readline ("Saisir nombre de valeur : ");
    for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
        $tabMorpion[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
    }
    $intSomme=0;

    foreach ($tabMorpion as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "Somme : ". $intSomme;
    echo "\n";
    echo "Somme :  ".array_sum($tabMorpion);

?>