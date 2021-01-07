<?php
    $entier = readline("Combien de Saisie : ");
    $entier = intval($entier);

    for ($i=1 ; $i < $entier+1 ; $i++){
        $nombre = readline("Saisir un nombre : ");
        if($i<2){
            $maxi=$nombre;
            $j = 1;
        } else if ($maxi<$nombre){
            $maxi=$nombre;
            $j++;
        }
    };
    echo "le max est : ".$maxi." a la position : ".$j;


?>