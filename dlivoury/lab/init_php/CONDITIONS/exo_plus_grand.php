<?php
    $nbValeur=readline("saisir le nombre de valeur a entrer:  ");
   

    while($nbValeur<=0 or $nbValeur/1 != $nbValeur){
        $nbValeur=readline("saisir un nombre valide: ");
    }
    $nombre1=readline("saisir une valeur: ");
    for($i=0;$i<=$nbValeur-2;$i++){
        $newNb=readline("saisir un nombre: ");
        
        if($newNb>$nombre1){
            $nombre1=$newNb;
        }
    
    }    echo $nombre1.' '."est la valeur saisie la plus grande";