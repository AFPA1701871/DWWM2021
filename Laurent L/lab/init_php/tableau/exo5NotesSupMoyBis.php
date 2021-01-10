<?php
    // variables
    $nbSaisie = 0;
    $notes = [];
    $notesSup =[];
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
    $moyenne = array_sum($notes)/count($notes);

    // déterminer les valeurs supérieurs à la moyenne
    foreach($notes as $element){
        if($element>$moyenne){
            $notesSup[$k]=$element;
            $k++;
        }
    }

    // affichage des resultats
    echo "La moyenne de classe est ".$moyenne."/20.\nLes notes supérieures à cette moyenne sont les suivantes";
    foreach($notesSup as $element){
        echo ", ".$element;
    }

?>