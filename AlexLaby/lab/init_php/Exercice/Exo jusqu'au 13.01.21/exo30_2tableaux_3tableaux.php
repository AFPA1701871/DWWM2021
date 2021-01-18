<?php

    //Sans Fonction
    $tab1= array (1,3,5,7,9);
    $tab2= array (2,4,6,8,10);
    $tab3= array();
    $compteur=0;

    echo "Le premier tableau ";
    foreach ($tab1 as $element) {
        echo $element." ";
        }
        "\n";

    echo "Le second tableau ";
    foreach ($tab2 as $element) {
        echo $element." ";
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

    echo "Le tableau trié par ordre croissant ";
    foreach ($tab3 as $element) {
        echo $element." ";
        }
        "\n";

    //Avec Fonction (mais ça respecte pas la consigne si on prend l'exemple des piles de feuilles)

    $tab3= array_merge($tab1,$tab2);
    sort($tab3);

    echo "Le tableau trié par ordre croissant : ";
    foreach ($tab3 as $element) {
        echo $element." ";
        }
        "\n";



?>