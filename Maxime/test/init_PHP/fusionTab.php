<?php

    $tab1= array (3,5,9,12,15,20);
    $tab2= array (4,6,10,13,16,21);
    $tab3= array();
    $compteur=0;

    echo "tableau 1 : ";
    foreach ($tab1 as $element) {
        echo "$element ";
        }
        "\n";

    echo "\n";
    echo "tableau 2 : ";
    foreach ($tab2 as $element) {
        echo "$element ";
        }
        "\n";

    for ($i=0;$i<count($tab1);$i++){
        if ($tab1[$i]<$tab2[$i]){
            $tab3[$compteur]=$tab1[$i];
            $compteur=$compteur+1;
            $tab3[$compteur]=$tab2[$i];
        }else if($tab1[$i]>$tab2[$i]){
            $tab3[$compteur]=$tab2[$i];
            $compteur=$compteur+1;
            $tab3[$compteur]=$tab1[$i];
        }
        $compteur=$compteur+1;
    }

    echo "\n";
    echo "tableau 3 par ordre croissant : ";
    foreach ($tab3 as $element) {
        echo "$element ";
        }
        "\n";

?>