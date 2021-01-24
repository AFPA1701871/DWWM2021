<?php
//Fonction calcul de la circonférence
function calculCirconference($rayon){
    $circonference = 2 * pi() * $rayon;
    echo "Sa circonférence est de        : ".$circonference;
    return $circonference;
}

//Fonction calcul surface du cercle
function calculSurface($rayon){
    $surface = pi() * $rayon * $rayon;
    echo "\nSa surface est de :            :". $surface."\n";
}
?>