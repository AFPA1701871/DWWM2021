<?php
    do {
    $nbTotalNotes=readline("Notez le nombres de notes que vous voulez ajoutez.");
        if ($nbTotalNotes<=0) {
            echo("Saisie incorrect, veillez recommencer.");
            $nbTotalNotes=readline("Notez un nombres correct s'il vous plait.");
        }
    }
    while($nbTotalNotes<=0);
    do{
        $notes=readline("Notez une notes :\n");
        if ($notes > 20){
            do{
                echo "La notes n'est pas correct veillez saisir une notes correct.\n";
                $notes=readline("Notez une notes correct svp :\n");
            }
            while($notes > 20);
        }
        $tab[] = $notes;
    } 
    while(sizeof($tab)<>$nbTotalNotes);
    $somme =array_sum($tab);
    $moyenne = $somme/sizeof($tab);
    echo "La Moyenne des notes est : $moyenne.\n";
    $notesSup = 0;
    foreach ($tab as $nbVal) {
        if ($nbVal>$moyenne){
            echo "La note $nbVal est au dessus de la moyenne.\n";
            $notesSup = $notesSup + 1;
        }
    }
    echo "Le nombres total des notes supérieur si dessus est : $notesSup.";
?>