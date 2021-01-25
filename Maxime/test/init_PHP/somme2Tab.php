<?php

    $tab1= array (4,8,7,9,1,5,4,6);
    $tab2= array (7,6,5,2,1,3,7,4);
    $tab3=[];

    for ($i=0;$i<count($tab1);$i++){
        $tab3[$i]=($tab1[$i]+$tab2[$i]);
    }

    foreach ($tab1 as $element){
        echo $element." "."\n";
    }
        
    foreach ($tab2 as $element){
        echo $element." "."\n";
    }
        
    foreach ($tab3 as $element){
        echo $element." ";
    }
    
?>