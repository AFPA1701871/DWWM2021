<?php
    $nombre=readline("entrez un nombre: ");
    echo "voici la table de multiplication de ce nombre";
    
    for ($i=0; $i < 11 ; $i++) { 
        $nbFoisI=$nombre*$i;
        echo "$nbFoisI\n";
    }
?>