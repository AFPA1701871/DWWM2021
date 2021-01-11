<?php
do{
    $nombreValeur=readline("combien de nombre ?");
}while($nombreValeur<=0 or $nombreValeur!=strval(intval($nombreValeur)));
$positif=$negatif=0;
for($i=0;$i<$nombreValeur;$i++){
    do{
        $nombre[$i]=readline("nombre n°".strval($i+1)." ? ");
    }while($nombre[$i]!=strval(floatval($nombre[$i])));
    if($nombre[$i]>0){
        $positif++;
    }elseif($nombre[$i]<0){
        $negatif++;
    }
}
echo "nombre de nombre positif: ".$positif."\nnombre de nombre negatif: ".$negatif; 
?>