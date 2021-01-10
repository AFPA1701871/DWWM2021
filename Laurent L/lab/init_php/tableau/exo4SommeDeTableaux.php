<?php
 
    //variables
    $tab1 = [4,8,7,9,1,5,4,6];
    $tab2 = [7,6,5,2,1,3,7,4];
    $tab3 = [];
    //calcul du tableau 3
    for ($i = 0 ; $i < 8; $i++){
        $tab3[$i] = $tab1[$i]+$tab2[$i];
    }
    // affichage des éléments du tableau 3
    echo "Le tableau 3 est constitué des valeurs suivantes";

    for ($i = 0 ; $i < 8 ; $i++){
        echo ", ".$tab3[$i];
    }

?>