<?php

    $nombre1=readline ("Ecrivez un premier nombre");
    $nombre2=readline ("Ecrivez un second nombre");
    $operator=readline ("Ecrivez votre opérateur");

    if ($operator== "+"){
        $reponse= $nombre1 + $nombre2;   
        echo "$reponse";
    } 
    else if ($operator== "-"){
        $reponse= $nombre1 - $nombre2;
        echo "$reponse";
    }
    else if ($operator== "*"){
        $reponse= $nombre1 * $nombre2;
        echo "$reponse";
    }
    else if ($operator== "/"){
        $reponse= $nombre1 / $nombre2;
        echo "$reponse";
    }

?>