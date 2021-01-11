<?php
    $nombre=readline("saisir un nombre: ");

    while($nombre!=is_numeric($nombre)){
        $nombre=readline("saisir une valeur valide: ");
    }
    for($i=0;$i<10;$i++){
            $nombre=$nombre+1;
            echo "$nombre\n";           
    }
?>

    