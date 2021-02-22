<?php
$tab1=array(1,2,3,4,5,6,7);
$tab2=array(5,6,7,8,9,10,7);
$tabf=array();
$result = array_merge($tab1, $tab2);
for ($i=0; $i <count($result)-1 ; $i++) { 
    for ($j=$i+1; $j <count($result); $j++) { 
        if ($result[$i]>$result[$j]) {
            $tmp=$result[$i];
            $result[$i]=$result[$j];
            $result[$j]=$tmp;
        }
    }    
}

print_r($result);

?>