<?php
    //variables
    $croix ="X";
    $cercle ="O";
    $symbole = [];
    $symbole2 = [];
    $bouclage = 20;

    for ($i = 1; $i<=$bouclage-1 ; $i++){
        $symbole[$i]=$croix;
        if ($i>2){
            $symbole[$i-1]=$cercle;
        }
        for ($j = 1 ; $j <= count($symbole) ; $j++){
            echo $symbole[$j];
        }
        echo "\n";
    }

    for ($i = 1 ; $i <= $bouclage; $i++){
        $symbole2[$i]=$croix;
        echo $symbole2[$i];
    }
?>