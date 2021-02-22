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
    // calcul intermédiaire et résultat de la moyenne
    // $somme = array_sum($valeur);
    // $moyenne = $somme/count($valeur);

    // ou calcul direct moyenne
    $moyenne = array_sum($valeur)/count($valeur);

    //affichage moyenne
    echo "La moyenne du tableau est de ".$moyenne;
    

?>