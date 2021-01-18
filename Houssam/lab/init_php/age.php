<?php
    $age =readline("Quel est l'age de votre enfant ? ");
    
    if ($age<6) {
        echo "Vous êtes trop jeune pour le Rugby";
    }   elseif ($age==6 or $age==7) {
        echo "Vous êtes dans la catégorie Poussin";
    }   elseif ($age==8 or $age==9) {
        echo "Vous êtes dans la catégorie Pupille";
    } elseif ($age==10 or $age==11) {
        echo "Vous êtes dans la catégorie Minime";
    } elseif ($age>12) {
        echo "Vous êtes dans la catégorie Cadet";
    } 
?>