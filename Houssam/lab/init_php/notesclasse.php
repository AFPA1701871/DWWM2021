<?php

$notes=0;
$nbrNotes=0;
$nbr=0;
$moyenne=0;

    $nbr =readline("Écrivez le nombre d'élèves : ")."\n";
    for ($i = 0; $i < $nbr; $i++){
        $tab[$i] =intval (readline("Écrivez une note : "));
        $notes=$notes+$tab[$i];
    }

    $moyenne= $notes/$nbr;

    for ($i = 0; $i < $nbr; $i++){
        if ($tab[$i] > $moyenne){
            $nbrNotes=$nbrNotes+1;
        }
    }

    echo "Les notes de la classe sont : " . print_r($tab). "\n";
    echo "La moyenne de la classe est : ". $moyenne ."\n";
    echo "Le nombre des notes supérieurs à la moyenne est : ". $nbrNotes;

?>
