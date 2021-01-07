<?php
    $age = readline("Quel est votre âge ?");
    if($age<=5){
        echo "Trop jeune";
    }
    elseif($age>5 and $age<8){
        echo "Poussin";
    }
    elseif($age>7 and $age<10){
        echo "Pupille";
    }
    elseif($age>9 and $age<12){
        echo "Minime";
    }
    else{
        echo "Cadet";
    }
?>