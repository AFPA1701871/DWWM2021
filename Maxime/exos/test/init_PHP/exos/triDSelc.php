<?php

    $tab= array(3,25,7,30,9);
    $nb = count($tab);

    echo "tableau : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";
        
    for($i=0;$i<($nb-1);$i++){
        for($j=$i+1;$j<$nb;$j++){
            if($tab[$i]<$tab[$j]){
                $tempo=$tab[$i];
                $tab[$i]=$tab[$j];
                $tab[$j]=$tempo;
            }  
        }   
    }

    echo "\n";
    echo "tableau dans l'ordre croissant : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";

?>