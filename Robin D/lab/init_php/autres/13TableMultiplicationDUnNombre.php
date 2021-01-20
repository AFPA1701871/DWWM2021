<?php
    $nombre=readline("entrez un nombre: \n");
    echo "voici la table de multiplication de ce nombre\n";
    
    for ($i=1; $i < 11 ; $i++) { 
        $nbFoisI=$nombre*$i;
        echo "$nombre*$i=$nbFoisI\n";
    }
?>