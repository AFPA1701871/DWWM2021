<?php
    $age =readline("Quel est l'age de votre enfant ? ");
    
    switch ($age) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Vous êtes trop jeune pour le Rugby";
        break;
        case 6:
        case 7:
            echo "Vous êtes dans la catégorie Poussin";
        break;
        case 8:
        case 9:
            echo "Vous êtes dans la catégorie Pupille";
        break;
        case 10:
        case 11:
            echo "Vous êtes dans la catégorie Minime";
        break;
        case 12:
            echo "Vous êtes dans la catégorie Cadet";
        break;
    } 
?>