<?php
do{
    $nombreValeur=readline("combien de nombre ?");
}while($nombreValeur<=0 or $nombreValeur!=intval($nombreValeur));
$somme=0;
for($i=0;$i<$nombreValeur;$i++){
    $nombre[]=readline("nombre n°".strval($i+1)." ? ");
    $somme=$somme+$nombre[$i];
}
echo "la somme est: ".$somme; 
?>