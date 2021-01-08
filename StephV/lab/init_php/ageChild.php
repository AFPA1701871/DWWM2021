<?php
$age = readline("Sisissez l'âge de l'enfant");

    if ($age==6 or $age==7){
        echo "Cat. poussin";
    }

    if ($age==8 or $age==9){
        echo "Cat. pupille";
    }

    if ($age==10 or $age==11){
        echo "Cat. minime";
    }

    if ($age==12){
        echo "Cat. cadet";
    }

    if ($age<6){
        echo "hors cat.";
    }

    if ($age >12){
        echo "hors cat.";
    }

?>