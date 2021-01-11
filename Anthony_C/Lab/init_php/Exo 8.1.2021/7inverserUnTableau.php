<?php
    $tab = array(30,20,10,3,2,1);
    $tab = array_reverse($tab);
    //print_r($tab);

    //Sans fonction.
    $tab2 = array(30,20,10,3,2,1);
    $count = 2;
    for ($i=0; $i<(intdiv(sizeof($tab2),$count)) ; $i++){ 
        $k = (sizeof($tab2)-1) - $i;
        $stock = $tab2[$k];
        $tab2[$k] = $tab2[$i];
        $tab2[$i] = $stock;
    }
    print_r($tab2)

?>