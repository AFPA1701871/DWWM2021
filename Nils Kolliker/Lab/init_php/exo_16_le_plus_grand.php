<?php
do{
    $nombre=readline("nombre de nombre: ");
}while ($nombre<=0 or $nombre!=strval(intval($nombre)));
do{
    $theBig=readline("besoin d'un nombre: ");
}while($theBig!=strval(floatval($theBig)));
$rang=1;
for ($i=1;($i<$nombre);$i++){
    do{
        $theChalenger=readline("un autre: ");
    }while($theChalenger!=strval(floatval($theChalenger)));
    if ($theBig<$theChalenger){
        $theBig=$theChalenger;
        $rang=$i+1;
    }
}
echo "le plus gros c'est ".$theBig.". il est entré en position ".$rang;
?>