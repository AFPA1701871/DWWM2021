<?php

    $line=readline("Entrez un nombre");
    if ($line>0){
        $reponse="nombre positif";
    }
    else if ($line<0){
        $reponse="nombre négatif";
    }
    else{
        $reponse="Votre nombre est 0";
    }
    echo $reponse;

?>

