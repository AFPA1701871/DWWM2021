<?php
    $tabValeur=[];
    $somme=0;
    $nbValeur=readline("saisir le nombre de valeur a calculer: ");

    for($i=0;$i<$nbValeur;$i++){
        $tabValeur[$i]=readline("saisir une valeur: ");
        $somme=$somme+$tabValeur[$i];
    }
    foreach($tabValeur as $addition){
        echo "$addition\n";
    }
        echo "$somme".' '."est l'addition des valeurs saisies";
?>