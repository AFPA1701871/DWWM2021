<?php
    // Variables
    $nbSaisie = 0;
    $saisie = [];

    // nombre de saisies et creation du tableau
    while (($nbSaisie<=0) or (intdiv($nbSaisie, 1) != $nbSaisie)){
        $nbSaisie = readline("Nombre de saisie(s) : ");
    }
    for($i = 0 ; $i < $nbSaisie ; $i++){
        $saisie[$i] = readline("Votre saisie : ");
    }

    //affichage du tableau avant tri
    echo "Tableau avant tri :";
    print_r($saisie);

    //tri a selection decroissant

    for($i = 0 ; $i< count($saisie)-1; $i++){
        $maxi = $i;
        for($j = $i+1; $j < count($saisie) ; $j++){
            if($saisie[$j]>$maxi){
                $maxi = $j;
            }
        }
        if ($maxi != $i){
            $temp = $saisie[$i];
            $saisie[$i] = $saisie[$maxi];
            $saisie[$maxi] = $temp;
        }
    }

    //affichage du tableau apres tri
    echo "Tableau apres tri :";
    print_r($saisie);

?>