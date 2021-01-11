<?php

    for ($intCompt=0; $intCompt <=8 ; $intCompt++) {
        do{
        $tabMorpion[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
        }while(is_numeric($tabMorpion[$intCompt])==false);
    }
    $intSomme=0;    
    foreach ($tabMorpion as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "La moyenne est de ".($intSomme/count($tabMorpion));
    echo "\n";
  echo "La moyenne est de ". array_sum($tabMorpion)/count($tabMorpion);
?>