<?php

    $tab= array(5,4,12,10,17);
    $count = count($tab);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";
    
    for ($i=0;$i<=(intdiv($count, 2));$i++){
        $temp=$tab[$i];
        $tab[$i]=$tab[$count-$i-1];
        $tab[$count-$i-1]=$temp;
    }
    
    echo "Les premiers sont les derniers : ";
    foreach ($tab as $element) {
        echo $element." ";
        }


?>
