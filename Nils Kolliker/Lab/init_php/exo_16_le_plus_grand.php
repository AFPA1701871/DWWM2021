<?php
$nombre=readline("nombre de nombre: ");
$theBig=readline("besoin d'un nombre: ");
$rang=1;
for ($i=1;($i<$nombre);$i++){
    $theChalenger=readline("un autre: ");
    if ($theBig<$theChalenger){
        $theBig=$theChalenger;
        $rang=$i+1;
    }
}
echo "le plus gros c'est ".$theBig.". il est entré en position ".$rang;
?>