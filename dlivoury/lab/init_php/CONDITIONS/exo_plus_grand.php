<?php
    $nbValeur=readline("saisir le nombre de valeur a entrer:  ");
    $nombre1=readline("saisir un nombre: ");

    while($nbValeur<0 or $nbValeur/1 != $nbValeur){
        $nbValeur=readline("sasir un nobre valide: ");
    }
    for($i=0;$i<=$nbValeur-2;$i++){
        $newNb=readline("saisir un nombre: ");
        if($newNb>$nombre1){
            $nombre1=$newNb;
        }
        
    }
    echo"$nombre1";