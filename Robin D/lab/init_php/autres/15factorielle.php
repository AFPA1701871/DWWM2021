<?php
    $nombre=readline("entrez un nombre: ");
    echo "voici la factorielle de ce nombre :";

    $factorielle=1;
    for ($i=1; $i < $nombre+1 ; $i++) { 
        $factorielle=$factorielle*$i;
    }

    echo $factorielle
?>