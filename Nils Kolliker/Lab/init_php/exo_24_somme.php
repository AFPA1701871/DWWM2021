<?php
do{
    $nombreValeur=readline("combien de nombre ?");
}while($nombreValeur<=0 or $nombreValeur!=strval(intval($nombreValeur)));
for($i=0;$i<$nombreValeur;$i++){
    do{
        $nombre[$i]=readline("nombre n°".strval($i+1)." ? ");
    }while($nombre[$i]!=strval(floatval($nombre[$i])));
}
echo "la somme est: ".strval(array_sum($nombre)); 
?>