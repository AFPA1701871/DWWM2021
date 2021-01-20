<?php
$line = readline("Entrez un nombre :");

//Vérification si c'est un nombre
if (! is_numeric($line)) {
    echo "Recommencez : \n";
    $line = readline("Entrez un nombre :");
}

//On détermine si c'est un nombre positif ou négatif
if($line > 0){
    echo "C'est un nombre positif";
}else{
    "C'est un nombre négatif";
}
?>