<?php
    $age=readline("entrez l'âge de l'enfant: ");

    switch ($age) {
        case '13':
        case '12':
            echo "la catégorie d'un enfant de $age ans est cadet";
            break;

        case '11':
        case '10':
            echo "la catégorie d'un enfant de $age ans est minime";
            break;

        case '9':
        case '8':
            echo "la catégorie d'un enfant de $age ans est pupille";
            break;

        case '7':
        case '6':
            echo "la catégorie d'un enfant de $age ans est poussin";
            break;
        
        default:
        echo "la catégorie d'un enfant de $age ans n'est pas catégorisée ici";
            break;
    } 
?>