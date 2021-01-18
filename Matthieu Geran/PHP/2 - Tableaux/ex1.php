<?php

    $somme = 0;

    for ($i=0;$i<=8;$i++){
        $valeur = readline("Tapez un nombre : ");
        $tableau[$i] = $valeur;
        $somme += $valeur;
    }
  
    $moyenne = $somme / count($tableau);

    echo $moyenne;

?>