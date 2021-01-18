<?php

    //variables
    $i = 0;
    $j = 0;
    $tab1 = array("Alain", "Bernard", "Pierre", "Teddy");
    $tab2 = array("Claude","Jean","Louis");
    $tab3 = [];

    print_r($tab1);
    print_r($tab2);

    $tab3 = array_merge($tab1, $tab2);
    sort($tab3);

    print_r($tab3);



    




?>