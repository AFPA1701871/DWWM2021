<?php

    $tabVal1 = array(4,8,7,9,1,5,4,6);
    $tabVal2=array(7,6,5,2,1,3,7,4);
    $tabVal3=array();

    for ($i=0; $i <count($tabVal1); $i++) { 
        $tabVal3[$i]=($tabVal1[$i]+$tabVal2[$i]);
    }
    foreach ($tabVal3 as $intVal) { 
        echo $intVal. " ";
    }

?>