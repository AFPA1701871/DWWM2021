<?php
    $nombre=readline("entrez un nombre: ");
    echo "voici la sommes des entiers jusqu'à ce nombre :";

    $sommeDesEntiers=0;
    for ($i=1; $i < $nombre+1; $i++) { 
        $sommeDesEntiers=$sommeDesEntiers+$i;
    }

    echo $sommeDesEntiers;
?>