<?php

    $tab= array(5,4,12,10,17);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";

    for ($i=1;$i<=count($tab)-1;$i++){
        for ($i2=$i+1;$i<=count($tab);$i++){
            if ($tab[$i]<$tab[$i2]){
                $temp=$tab[$i];
                $tab[$i]=$tab[$i2];
                $tab[$i2]=$temp;
            }
        }
    }
    
    echo "Le tableau trié par ordre décroissant : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";
        
?>

