<?php

    $saisie = readline("Saisir un nombre : ");

    //settype($saisie, "real");
    $saisie = intval($saisie);
    echo $saisie."\n";
    var_dump($saisie);
    
    // en tenant compte de 0
    // if ($saisie<0) {
    //     echo "Le nombre est négatif.";
    // } else if ($saisie>0){
    //     echo "Le nombre est positif.";
    // } else {
    //     echo "Le nombre est nul.";
    // };
    
    //cas sans tenir compte de 0
    (($saisie<0) ? $resultat = "Le nombre est négatif." : $resultat = "Le nombre est positif.");      
    echo $resultat;

?>
