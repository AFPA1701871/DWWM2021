<?php

    $nombre1 = readline("Tapez un premier nombre : ");
    $nombre2 = readline("Tapez un second nombre : ");
    $operateur = readline("Tapez un opérateur : ");

    switch ($operateur) {

        case "+" :
            $resultat=$nombre1+$nombre2;
            echo $resultat;
        break;

        case "-" :
            $resultat=$nombre1-$nombre2;
            echo $resultat;
        break;

        case "*" :
            $resultat=$nombre1*$nombre2;
            echo $resultat;
        break;

        case "/" :
            $resultat=$nombre1/$nombre2;
            echo $resultat;
        break;

        default : echo "Erreur de saisie.";
    }

?>