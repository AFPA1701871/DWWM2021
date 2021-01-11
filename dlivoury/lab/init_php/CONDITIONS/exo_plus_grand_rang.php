<?php
    $nbValeur=readline("saisir le nombre de valeur a entrer:  ");
    $nombre1=0;

    while($nbValeur<0 or $nbValeur/1 != $nbValeur){
        $nbValeur=readline("sasir un nobre valide: ");
    }
    for($i=0;$i<=$nbValeur-1;$i++){
        $newNb=readline("saisir un nombre: ");
        if($newNb>$nombre1){
            $nombre1=$newNb;
            $rang=$i+1;
        }
        
    }
    echo"$nombre1".' '."en $rang eme position";
