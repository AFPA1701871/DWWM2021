<?php
    $tab1=[1,2,3,4,5,6,7,8];
    $tab2=[1,2,3,4,5,6,7,8];
    $tab3=[];
    foreach($tab1 as $tabPlus){
         print_r($tabPlus.' ');   
    }
    echo"\n";
    foreach($tab2 as $tabPlus1){
        print_r($tabPlus1.' ');
    }
    echo"\n";
    for($i=0;$i<count($tab1);$i++){
        $tab3[$i]=$tab1[$i]+$tab2[$i];
    }
    foreach($tab3 as $resultat){
        print_r($resultat.' ');      
    }
    
?>