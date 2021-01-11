<?php

    $tab= array(5,4,12,10,17);
    $count = count($tab);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";
        
    $boolean= 1;
    while ($boolean= 1){
        $boolean= 0;
        for ($i=1;$i<=$count-1;$i++){
            if ($tab[$i]<$tab[$i+1]){
                $temp=$tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$temp;
                $boolean = 0;
            }     
        }
    }

    echo "Le tableau trié par ordre décroissant : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";

?>

