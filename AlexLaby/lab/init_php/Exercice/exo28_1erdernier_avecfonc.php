<?php

    $tab= array(5,4,12,10,17);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";

    $tab2=array_reverse($tab);

    echo "Les premiers sont les derniers : ";
    foreach ($tab2 as $element) {
        echo $element." ";
        }
        "\n";

?>