<?php

    // variables
    $valeur=[];
    $nbreDeSaisie = 0;

    // nbre de variables dans le tableau // a utiliser is_int
    while (($nbreDeSaisie<=0) or (intdiv($nbreDeSaisie,1) != $nbreDeSaisie) or (is_numeric($nbreDeSaisie) != $nbreDeSaisie)){
        $nbreDeSaisie = readline("Nombre de saisie(s) : ");  
    }

    // bouclage du tableau
    for ($i = 0 ; $i < $nbreDeSaisie ; $i++){
        $valeur[$i] = readline("Votre saisie : ");
    }

    //affichage moyenne
    echo "La somme du tableau est de ".(array_sum($valeur));
    

?>