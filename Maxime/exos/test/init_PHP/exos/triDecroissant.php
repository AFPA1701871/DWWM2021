<?php

    $tab= array(5,4,12,10,17);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." "."\n";
        }

    for ($i=1;$i<=count($tab)-1;$i++){
        for ($j=$i+1;$i<=count($tab);$i++){
            if ($tab[$i]<$tab[$j]){
                $tempo=$tab[$i];
                $tab[$i]=$tab[$j];
                $tab[$j]=$tempo;
            }
        }
    }
    
    echo "Le tableau trié par ordre décroissant : "."\n";

    foreach ($tab as $element) {
        echo $element." "."\n";
        }
        
?>

