<?php

    if (empty($_POST["nom"])){
        header('Location: ./page3.html');
    } else { //foreach pour tout mettre
        $fichier = fopen("./infos.txt", "a");
        fputs($fichier,"\n".$_POST["nom"]);
        fclose($fichier);
        header('Location: ./index.html');
    }

?>