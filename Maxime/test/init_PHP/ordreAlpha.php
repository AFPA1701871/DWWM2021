<?php
    $mot1=readline("entrer un mot : ");
    $mot2=readline("entrer un mot : ");
    $mot3=readline("entrer un mot : ");

    if(($mot1<$mot2) and ($mot2<$mot3)){
        echo "les mots sont par ordre alphabétique";    
    }

    else {
        echo "les mots ne sont pas par ordre alphabétique";
    }
?>