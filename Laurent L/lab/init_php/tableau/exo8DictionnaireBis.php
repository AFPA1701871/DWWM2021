<?php
    //Variables
    $dico = [];
    $nbElement = 0;
    $compteur = -1;

    //Saisie du dico
        //nombre de saisie dans le dico
    while ($nbElement <=0 or intdiv($nbElement,1) != $nbElement){
        $nbElement = readline("Nombre de mots à saisir dans le dictionnaire : ");
    }
    for($i=0;$i<$nbElement;$i++){
        $dico[$i] = readline("Votre mot : ");        
    }
    
    // tri du dictionnaire
    sort($dico);
    
    //Saisie du mot par l'utilisateur
    $saisie = readline("Votre recherche : ");

    //Recherche du mot dans le dico
    $compteur = array_search($saisie,$dico);

    //Affichage résultat
    if($compteur != -1){
        echo "Le mot est présent en position : ".($compteur+1);
    } else{
        echo "Le mot n'est pas présent dans le dictionnaire";
    }

?>