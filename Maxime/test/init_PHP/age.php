<?php
    $age=readline("entrer l'âge de l'enfant ");

    if($age<=5){
        echo "trop jeune";
    }

    if($age==6 or $age==7){
        echo "poussin";
    }

    if($age==8 or $age==9){
        echo "pupille";
    }

    if($age==10 or $age==11){
        echo "minime";
    }

    if($age>=12){
        echo "cadet";
    }
?>