<?php

    $line=readline("Entrez un  premier nombre");
    $line2=readline("Entrez un second nombre");

    if ($line>0 && $line2>0){
        $reponse= $line+ $line2 ."\n". "nombre positif";
    }
    else if ($line<0 && $line2<0){
        $reponse= $line+ $line2 ."\n". "nombre négatif";
    }
    else if ($line==0 && $line2==0 or $line+$line2==0){
        $reponse="Votre nombre est 0";
    }
    echo $reponse;

?>

