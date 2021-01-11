<?php
    $entier = readline("Combien de Saisie : ");
    $entier = intval($entier);

    for ($i=1 ; $i < $entier+1 ; $i++){
        $nombre = readline("Saisir un nombre : ");
        if($i<2){
            $maxi=$nombre;
        } else if ($maxi<$nombre){
            $maxi=$nombre;
        }
    };
    echo "le max est : ".$maxi;


?>