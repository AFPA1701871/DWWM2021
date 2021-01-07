<?php
    $age=readline("entrez l'âge de l'enfant: ");
    
    if ($age>=12) {
        echo "la catégorie d'un enfant de $age ans est cadet";
    }
    else if ($age>=10) {
        echo "la catégorie d'un enfant de $age ans est minime";
    }
    else if ($age>=8) {
        echo "la catégorie d'un enfant de $age ans est pupille";
    }
    else if ($age>=6) {
        echo "la catégorie d'un enfant de $age ans est poussin";
    } 
  
?>