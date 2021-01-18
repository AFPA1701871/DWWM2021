<?php
$tab=array(1,6,8,6,9,7,5,3,5);
for ($i=0; $i <count($tab)-1 ; $i++) { 
    for ($j=$i+1; $j <count($tab) ; $j++) { 
         $tmp =$tab[$i];
         $tab[$i]=$tab[$j];
         $tab[$j]=$tmp;  
    }
}
print_r($tab);
?>
