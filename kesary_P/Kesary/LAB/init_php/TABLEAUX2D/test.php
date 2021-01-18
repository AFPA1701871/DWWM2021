<?php
 /*$tab = array(
    0 => array( 0 => 0, 1 => 0, 2 => 0),
    1 => array( 0 => 1,1 => 1,2 => 1),
    2 => array(0 => 2,1 => 2,2 => 2)
);*/
$tab = array(
    0 => array( 0 => 1,1 => 2,2 => 3,3 => 4,4 => 8, 5 => 16),
    1 => array( 0 => 1,1 => 3,2 => 9,3 => 27,4 => 81,5 => 12 )  
);

for($j=0; $j< count($tab[$j]); $j++){
     echo "\n";
    for($i=0; $i< count($tab[$i]); $i++){
        echo" ";
        echo $tab[$i][$j];            
    }
   
}

?>
