<?php
    $nombre=readline("Ecrivez une nombre:");

    if ($nombre>0) {
        echo "le nombre $nombre est positif";
    }
    else if ($nombre<0) {
        echo "le nombre $nombre est négatif";
    }
    else {
        echo "le nombre $nombre est nul";
    }
?>