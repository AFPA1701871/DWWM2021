<?php

    $tab= array(3,25,7,30,9);
    $val=2;
    $nb = count($tab);

    echo "tableau : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";
    
    for ($i=0;$i<=(intdiv($nb, $val));$i++){
        $temp=$tab[$i];
        $tab[$i]=$tab[$nb-$i-1];
        $tab[$nb-$i-1]=$temp;
    }
    
    echo "\n";
    echo "le tableau inversé est : ";
    foreach ($tab as $element) {
        echo "$element ";
        }
        "\n";

?>