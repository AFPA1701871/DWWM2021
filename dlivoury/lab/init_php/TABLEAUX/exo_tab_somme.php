<?php
    $tabValeur=[];
    $somme=0;
    $nbValeur=readline("saisir le nombre de valeur a calculer: ");

    while($nbValeur<=0 or $nbValeur!=is_numeric($nbValeur)){
        $nbValeur=readline("saisir une valeur valide: ");
    }

    for($i=0;$i<$nbValeur;$i++){
        $tabValeur[$i]=readline("saisir une valeur: ");
        while($tabValeur[$i]!=is_numeric($tabValeur[$i])){
            $tabValeur[$i]=readline("saisir une valeur valide: ");
        }
        $somme=$somme+$tabValeur[$i];
    }
    print_r($tabValeur);
        echo "$somme".' '."est l'addition des valeurs saisies";
?>