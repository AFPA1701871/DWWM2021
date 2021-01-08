<?php

    $nombreUser=readline("Veuillez entrez un premier nombre");
    $nombreUser2=readline("Veuillez entrez un second nombre");

    if ($nombreUser>0 && $nombreUser2>0){
        $reponse= $nombreUser+ $nombreUser2 ."\n". "Le nombre est positif";
    }
    else if ($nombreUser<0 && $line2<0){
        $reponse= $nombreUser+ $nombreUser2 ."\n". "Le nombre est négatif";
    }
    else if ($nombreUser==0 && $nombreUser2==0 or $nombreUser+$nombreUser2==0){
        $reponse="Votre nombre est 0";
    }
    echo $reponse;

?>