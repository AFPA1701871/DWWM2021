<?php

    for ($intCompt=0; $intCompt <=8 ; $intCompt++) { 
        $tabMorpion[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
    }
    $intSomme=0;    
    foreach ($tabMorpion as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "La moyenne est de ".($intSomme/count($tabMorpion));
    echo "\n";
  echo "La moyenne est de ". array_sum($tabMorpion)/count($tabMorpion);
?>