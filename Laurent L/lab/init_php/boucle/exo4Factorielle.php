<?php
    $entier = readline("Entrez un nombre : ");
    $entier = intval($entier);
    $resultat = 1;

    for ($i = 1 ; $i <= $entier ; $i++){
        $resultat = $resultat*$i;
    } 
    echo "Le resultat de la factorielle de ".$entier." est : ", $resultat;


?>