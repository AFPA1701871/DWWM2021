<?php

    $line=readline("Entrez un  premier nombre : ");
    $line2=readline("Entrez un second nombre : ");
    $reponse= $line + $line2;

    if ($reponse>0){
        echo  "nombre positif" . "\n";
    }else if ($reponse<0){
        echo  "nombre négatif" . "\n";
    }else if ($reponse==0){
        echo  "Votre nombre est 0" . "\n";
    }
    
    echo $reponse;

?>

