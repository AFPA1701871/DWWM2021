<?php
    $nombre=readline("saisir un nombre ou un chiffre: ");
    while($nombre!=is_numeric($nombre)){
        $nombre=readline("saisir une valeur valide: ");
    }
    
    for($i=0;$i<=10;$i++){
        $resultat=$nombre*$i;
        echo "$resultat\n";
    }
?>