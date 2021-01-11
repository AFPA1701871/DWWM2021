<?php

    // variables
    $valeur=[];
    $nbreDeSaisie = 0;

    // nbre de variables dans le tableau
    while (($nbreDeSaisie<=0) or (intdiv($nbreDeSaisie,1) != $nbreDeSaisie)){
        $nbreDeSaisie = readline("Nombre de saisie(s) : ");  
    }

    // bouclage du tableau
    for ($i = 0 ; $i < $nbreDeSaisie ; $i++){
        $valeur[$i] = readline("Votre saisie : ");
    }

    // calcul 
    $somme = array_sum($valeur);    

    //affichage moyenne
    echo "La somme du tableau est de ".$somme;
    

?>