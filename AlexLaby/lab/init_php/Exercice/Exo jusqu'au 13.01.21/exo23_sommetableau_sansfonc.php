<?php

    $tablo1= array (4,8,7,9,1,5,4,6);
    $tablo2= array (7,6,5,2,1,3,7,4);
    $tablo3=[];

    for ($i=0;$i<count($tablo1);$i++){
        $tablo3[$i]=($tablo1[$i]+$tablo2[$i]);
    }
    foreach ($tablo1 as $element) {
        echo $element." ";
        }
        "\n";
    foreach ($tablo2 as $element) {
        echo $element." ";
        }
        "\n";
    foreach ($tablo3 as $element) {
        echo $element." ";
        }
?>
