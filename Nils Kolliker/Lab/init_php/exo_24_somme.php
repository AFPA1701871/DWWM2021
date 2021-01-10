<?php
do{
    $nombreValeur=readline("combien de nombre ?");
}while($nombreValeur<=0 or $nombreValeur!=intval($nombreValeur));
for($i=0;$i<$nombreValeur;$i++){
    $nombre[]=readline("nombre n°".strval($i+1)." ? ");
}
echo "la somme est: ".strval(array_sum($nombre)); 
?>