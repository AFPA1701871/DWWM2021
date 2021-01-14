<?php

    $tab= array(5,4,12,10,17);

    echo "Le tableau de base : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";

    rsort($tab);

    echo "Le tableau trié par ordre décroissant : ";
    foreach ($tab as $element) {
        echo $element." ";
        }
        "\n";

?>
