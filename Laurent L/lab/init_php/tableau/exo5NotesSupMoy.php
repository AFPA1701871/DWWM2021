<?php
    // variables
    $nbSaisie = 0;
    $somme = 0;
    $notes = [];
    $notesSup = [];
    $k = 0;

    // nombre de notes à saisir
    while (($nbSaisie<=0) or (intdiv($nbSaisie, 1) != $nbSaisie)){
        $nbSaisie = readline("Nombre de note(s) : ");
    }

    // saisir les notes dans un tableau
    for( $i = 0 ; $i < $nbSaisie ; $i++ ){
        $note = readline("Saisir la note : ");
        while (($note<0) or ($note>20) ){
            $note = readline("Saisir la note : ");
        }
        $notes[$i] = $note;
    }

    // faire la moyenne
    for($i=0 ; $i < $nbSaisie ; $i++){
        $somme = $somme + $notes[$i];
    }
    $moyenne = $somme / $nbSaisie;

    // déterminer les valeurs supérieurs à la moyenne
    for($i = 0 ; $i < $nbSaisie ; $i++){
        if($notes[$i]>$moyenne){
            $notesSup[$k]=$notes[$i];
            $k++;
        }
    }

    // affichage des resultats
    echo "La moyenne de classe est ".$moyenne."/20.\nLes notes supérieures à celle-ci sont les suivantes";
    for($i = 0; $i <count($notesSup) ; $i++){
        echo ", ".$notesSup[$i];
    }
?>