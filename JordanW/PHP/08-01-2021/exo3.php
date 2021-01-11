<?php
    do{
        $intNombreVal = readline ("Saisir nombre de valeur : ");
    }while(is_numeric($intNombreVal)==false);
    for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
        do{
            $tabMorpion[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
        }while(is_numeric($tabMorpion[$intCompt])==false);
    }
    $intSomme=0;

    foreach ($tabMorpion as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "Somme : ". $intSomme;
    echo "\n";
    echo "Somme : ".array_sum($tabMorpion);

?>