<?php

    $nb1=readline("saisir un nombre ");
    $nb2=readline("saisir un second nombre ");
    $ope=readline("saisir un l'opérateur ");

    switch($ope){
        case "+" :
            $resultat=$nb1+$nb2;
        break;

        case "-" :
            $resultat=$nb1-$nb2;
        break;

        case "*" :
            $resultat=$nb1*$nb2;
        break;

        case "/" :
            $resultat=$nb1/$nb2;
        break;
    }

    echo $resultat

?>