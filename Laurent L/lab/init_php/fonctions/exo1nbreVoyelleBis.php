<?php

    require('fonctions.php');
    $compteur = 0;
    $voyelle = ["a","e","i","o","u","y"];

    //Demande de la saisie à l'utilisateur
    $saisie = readline("Saisir votre phrase : ");

    //transformation de la chaine de caractères en tableau
    $saisie = str_split($saisie);

    //Bouclage pour determiner si chacun des elements du tableau
    //issus de la saisie sont présents dans le tableau voyelle 
    foreach($saisie as $lettre){
        if(in_array($lettre,$voyelle)){
            $compteur++;
        }
    }
    echo "Nombre de voyelle(s) : $compteur";
  


?>