<?php
    //Avec fonction
    $tab = array(7,5,8,9,6,2,4,1,3);
    rsort($tab);
    print_r($tab);

    //Sans fonction Tri à bulles.
    $tab2 = array(7,5,8,9,6,2,4,1,3);
    $ok = true;
    while($ok == true){
        $ok = false;
        for ($i=0 ; $i < sizeof($tab2)-1 ; $i++) { 
            if ($tab2[$i]<$tab2[$i+1]){
                $stock=$tab2[$i];
                $tab2[$i]=$tab2[$i+1];
                $tab2[$i+1]=$stock;
                $ok = true;
            }
        }       
    }
    print_r($tab2);

    //Sans fonction Tri par sélection.
    $tab3 = array(7,5,8,9,6,2,4,1,3);
    for ($i=0; $i < sizeof($tab3)-1 ; $i++) {
        for ($j=0; $j < sizeof($tab3) ; $j++) { 
            if($tab3[$j]>$tab3[$i] & $i < $j){
                $stock = $tab3[$i];
                $tab3[$i] = $tab3[$j];
                $tab3[$j] = $stock;
            }
        }
    }
    print_r($tab3);
?>