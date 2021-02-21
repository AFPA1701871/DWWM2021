<?php
$c=1;
$leplusgrand=0;
$position=0;
$somme=1;
$nombre = readline(" entrez nombre  ")."\n";
while ($somme != 0) { //pour arreter le calcul tapez 0
     $c=$c+1;    
     $nombre1 = readline(" entrez nombre2  ")."\n";
     $somme= readline(" pour continuez taper un nombre si non tapez 0 pour arretez   ")."\n";     
     if ($nombre<$nombre1) {
          $leplusgrand=$nombre1;
          $position=$c; 
          $nombre=$nombre1;    
     }
}
echo "nombre plud grand est  ".$nombre;echo " sa position  ".$position;
    
    
    