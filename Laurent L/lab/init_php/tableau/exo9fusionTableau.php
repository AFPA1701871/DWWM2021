<?php

    //variables
    $i = 0;    // indexation $tab1
    $j = 0;    // indexation $tab2
    $tab1 = array("Alain", "Bernard", "Pierre", "Teddy");
    $tab2 = array("Claude","Jean","Louis");
    $tab3 = [];

    print_r($tab1);
    print_r($tab2);

    for($k = 0 ; $k <(count($tab1)+count($tab2)); $k++){
        if($i==count($tab1)){
            $tab3[$k] = $tab2[$j];
            $j++;
        } else if($j==count($tab2)){
                $tab3[$k] = $tab1[$i];
                $i++;
        }   else if(($tab1[$i]<$tab2[$j]) and ($i<(count($tab1))) ){
                $tab3[$k] = $tab1[$i];
                $i++;
        }       else if (($tab1[$i]>$tab2[$j]) and ($j<(count($tab2))) ) {
                    $tab3[$k] = $tab2[$j];
                    $j++;        
        }          
    }

    print_r($tab3);



    




?>