<?php
$nombre1 = readline("Entrez un nombre : ");
$nombre2 = readline("Entrez un nombre : ");

//Vérification si c'est un nombre
if (! is_numeric($nombre1) || (! is_numeric($nombre2))) {
    echo "Recommencez : \n";
    $nombre1 = readline("Entrez un nombre : ");
    $nombre2 = readline("Entrez un nombre : ");
}else {
    echo "Vous donnez : \n";
    echo "Nombre 1 : ". $nombre1."\n";
    echo "Nombre 2 : ". $nombre2."\n";
}

if($nombre1 == 0 || $nombre2 == 0){
    echo "Impossible, le résultat du produit est nul";
}elseif(($nombre1 < 0 && $nombre2 < 0)||($nombre1 > 0 && $nombre2 > 0)){
    echo "Le produit est positif ";
}else {
    echo "Le produit est négatif";
}
?>