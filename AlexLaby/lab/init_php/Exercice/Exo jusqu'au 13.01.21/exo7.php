<?php

    $line=readline("Donner l'âge de l'enfant");

    if ($line<=5){
        $reponse=  "Trop jeune";
    }
    else if ($line==6 or $line==7){
        $reponse=  "Poussin";
    }
    else if ($line==8 or $line==9){
        $reponse=  "Pupille";
    }
    else if ($line==10 or $line==11){
        $reponse="Minime";
    }
    else if ($line>=12){
        $reponse="Cadet";
    }
    echo $reponse;

?>
