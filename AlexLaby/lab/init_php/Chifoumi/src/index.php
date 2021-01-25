<?php

    require('./Entities/function.php');

    $inputNom=readline("Écrivez votre nom ");
    $inputPrenom=readline("Écrivez votre prénom ");
    echo "\n"."\n";
    echo "1,2,3 Pierre Feuille Ciseaux !\n\n";
    if(jeu()==true){
        $fp= fopen("winners.txt", "a");
        fputs($fp, $inputNom." ");
        fputs($fp, $inputPrenom);
        fputs($fp, "\n");
        fclose($fp);
    }
    if(affichage()==true){
        echo affichage();
    }

?>