<?php
 
 $tabValeur=array(12,46,27,150,32,20,3);
 $nbValeur=count($tabValeur);
 print_r($tabValeur);

 for ($i=0; $i < $nbValeur-1 ; $i++) { 
    $plusPetit=$i;
    for ($j=$i+1; $j < $nbValeur; $j++) {
        if ($tabValeur[$j]>$tabValeur[$plusPetit]) {
            $plusPetit=$j;
        }
    }
        $temp=$tabValeur[$plusPetit];
        $tabValeur[$plusPetit]=$tabValeur[$i];
        $tabValeur[$i]=$temp;
}
    print_r($tabValeur);
