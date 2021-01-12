<?php
    $tabValeur=[];
    $nbValeur=readline("saisir le nombre de valeur a calculer: ");

    while(($nbValeur<=0) or ($nbValeur!=is_numeric($nbValeur)) or (intdiv($nbValeur,1)!=$nbValeur)) {
        $nbValeur=readline("saisir une valeur valide: ");
    }

    for($i=0;$i<$nbValeur;$i++){
        $tabValeur[$i]=readline("saisir une valeur: ");
        while($tabValeur[$i]!=is_numeric($tabValeur[$i])){
            $tabValeur[$i]=readline("saisir une valeur valide: ");
        }   
    }
    print_r($tabValeur);
    echo"somme des entiers du tableau= ".' '.array_sum($tabValeur);

