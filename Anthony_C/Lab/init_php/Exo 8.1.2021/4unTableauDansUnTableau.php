<?php
    $tab = array(4,8,7,9,1,5,4,6);
    $tab2 = array(7,6,5,2,1,3,7,4);
    for ($i=0; $i < count($tab); $i++) { 
        $tabResult[] = $tab[$i]+$tab2[$i]; 
    }
    print_r($tabResult);
    ?>