<?php

    $note=0;
    $nb=0;
    $val=1;
    $somme=0;
    $sup=0;

    do{
        $nb=readline ("Entrez le nombre de valeurs à saisir : ");
    } while ($nb<1 or $nb<(intdiv($nb,$val)) or $nb>(intdiv($nb,$val)));
    
    for($i=1;$i<=$nb;$i++){
        $note=readline ("Entrez une note ");
        while($note<0 or $note>20){
            $note=readline("note invalide, réessayer ");
        }
        $tab[$i]=$note;
        $somme=$somme+$note;
    }

    $moy=$somme/count($tab);

    for($i=1;$i<=count($tab);$i++){
        if($tab[$i]>$moy){
            $sup=$sup+1;
        }
    }

    echo "la moyenne est $moy et il y a $sup note au dessus";
    
?>