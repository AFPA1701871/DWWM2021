<?php

    for ($i=0;$i<=8;$i++){
        $valeur = readline("Tapez un nombre : ");
        $tableau[$i] = $valeur;
    }
  
    $moyenne = array_sum($tableau) / count($tableau);

    echo $moyenne;

?>