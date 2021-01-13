<?php
 $tabValeur=array(12,14,27,28,46,20,3);
 $nbValeur=count($tabValeur);
 print_r($tabValeur);

 if ($nbValeur>=2){
     for($i=0;$i<$nbValeur/2;$i++){
         $tempo=$tabValeur[$i];
         $tabValeur[$i]=$tabValeur[$nbValeur-1-$i];
         $tabValeur[$nbValeur-1-$i]=$tempo;

     }
 }
 print_r($tabValeur);

