<?php

    $tabVal = array(4,8,7,9,1,5,4,6);
    $tabVal2=array();

    $intCompt=0;
    for ($i=count($tabVal); $i >=0 ; $i--) { 
        $tabVal2[$intCompt]= $tabVal[$i];
        $intCompt++;
    }
    
    foreach ($tabVal2 as $intVal) { 
        echo $intVal. " ";
    }

    echo "\n";
    echo "\n";
    $tabva=array_reverse($tabVal);
    foreach ($tabVal2 as $intVal) { 
        echo $intVal . " ";
    }
    echo "\n";
?>