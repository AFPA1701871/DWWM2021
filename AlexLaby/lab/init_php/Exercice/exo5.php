<?php

    $line=readline("Entrez un nombre");
    if ($line>0){
        $reponse="nombre positif";
    }
    if ($line<0){
        $reponse="nombre négatif";
    }
    if ($line=0){
        $reponse="Votre nombre est 0";
    }
    echo $reponse;

?>

