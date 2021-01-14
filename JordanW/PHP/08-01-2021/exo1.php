<?php

    for ($intCompt=0; $intCompt <=8 ; $intCompt++) { 
        $tabVal[$intCompt]=readline("Saisir valeur ". ($intCompt+1) . " : ");
    }
    $intSomme=0;    
    foreach ($tabVal as $intVal) { 
        $intSomme+=$intVal;
    }
    echo "La moyenne est de ".($intSomme/count($tabVal));
    echo "\n";
  echo "La moyenne est de ". array_sum($tabVal)/count($tabVal);
?>