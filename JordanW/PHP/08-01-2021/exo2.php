<?php
    do{
        $intNombreVal = readline ("Saisir nombre de valeur : ");   
    }while(is_numeric($intNombreVal)==false);

    for ($intCompt=0; $intCompt <=$intNombreVal-1 ; $intCompt++) { 
        do{
            $tabMorpion[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
        }while(is_numeric($tabMorpion[$intCompt])==false);
    }
    $intPositif=0; 
    $intNegatif=0;
    $intZero=0;

    foreach ($tabMorpion as $intVal) { 
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