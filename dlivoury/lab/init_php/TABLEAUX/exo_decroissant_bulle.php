<?php
    
    $tabValeur=array(12,46,27,150,32,20,3);
    $nbValeur=count($tabValeur);
    print_r($tabValeur);

    $boolean=1;
    while ($boolean==1) {
        $boolean=0;
        for ($i=0; $i < $nbValeur-1; $i++) { 
            if ($tabValeur[$i] < $tabValeur[$i+1]) {
                $temp=$tabValeur[$i];
                $tabValeur[$i]=$tabValeur[$i+1];
                $tabValeur[$i+1]=$temp;
                $boolean=1;
            }
        }
    }

    
    print_r($tabValeur);
    ?>
    
    
    
