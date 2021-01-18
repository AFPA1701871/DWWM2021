<?php
    $magnitude=readline("entrez la magnitude: ");

    switch ($magnitude) {
        case '1':
            echo "Micro";
            break;
        case '2':
            echo "Tres mineur";
            break;
        case '3':
            echo "Mineur";
            break;
        case '4':
            echo "Léger";
            break;
        case '5':
            echo "Modéré";
            break;
        case '6':
            echo "Fort";
            break;
        case '7':
            echo "Majeur";
            break;
        case '8':
            echo "Important";
            break;
        case '9':
            echo "Dévastateur";
            break;
        default:
            echo "erreur de saisie ou apocalypse";
            break;
    }
?>