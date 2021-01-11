<?php
do{
    $nombreValeur=readline("combien de nombre ?");
}while($nombreValeur<=0 or $nombreValeur!=strval(intval($nombreValeur)));
$somme=0;
for($i=0;$i<$nombreValeur;$i++){
    do{
        $nombre[$i]=readline("nombre n°".strval($i+1)." ? ");
    }while($nombre[$i]!=strval(floatval($nombre[$i])));
    $somme=$somme+$nombre[$i];
}
echo "la somme est: ".$somme; 
?>