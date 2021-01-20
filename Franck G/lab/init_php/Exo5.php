<?php
    $nombre=readline("Veuillez entrez un nombre :");
    if ($nombre>0){
        $reponse="Le nombre est positif";
    }
    else if ($nombre<0){
        $reponse="Le nombre est négatif";
    }
    else if ($nombre==0){
        $reponse="Le nombre est 0";
    }
    echo $reponse;
?>