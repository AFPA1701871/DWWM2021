<?php
    $nombre1=readline("Entrez un nombre: ");
    $nombre2=readline("Entrez un nombre: ");

    if (($nombre1*$nombre2)>0) {
        echo "le produit des nombres $nombre1 et $nombre2 est positif";
    }
    else if (($nombre1*$nombre2)<0) {
        echo "le produit des nombres $nombre1 et $nombre2 est négatif";
    }
    else {
        echo "le produit des nombres $nombre1 et $nombre2 est nul";
    }
?>