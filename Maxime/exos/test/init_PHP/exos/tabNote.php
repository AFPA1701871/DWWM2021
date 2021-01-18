<?php

    $tab=array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);

    $tab["Houssam"]=15;     //ajout Houssam

    array_shift($tab);    //suppression Franck
    
    echo "\n";

    //note max et min
    echo "la note max est : ".max($tab)."\n";
    echo "la note min est : ".min($tab)."\n";

    ksort($tab);    //tri par orde alpha
    echo "\n";
    echo "tableau par ordre alpha : \n";
    foreach($tab as $nom=>$note){
        echo "$nom=>$note \n";
    }

    arsort($tab);    //tri par ordre mérite
    echo "\n";
    echo "tableau par ordre de mérite : \n";
    foreach($tab as $nom=>$note){
        echo "$nom=>$note \n";
    }

    //moyenne
    $moy=array_sum($tab)/count($tab);
    $moy=(round($moy,2));
    echo "\n";
    echo "la moyenne est de $moy"

?>