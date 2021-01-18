<?php
//$tab = [[1,1],[2,3],[3,9],[4,27],[8,81],[16,12]];
$tab = array(
    "T1" => array( 0 => 1,1 => 2,2 => 16,3 => 4,4 => 8, 5 => 4),
    "T2" => array( 0 => 1,1 => 3,2 => 9,3 => 27,4 => 81,5 => 12 )  
);


$Vmax = 0;
$vMin = 1000;
//print_r($tab);
//var_dump($tab);
foreach($tab as $key => $value){
    //echo $key;
    if (is_array($value)) {
        echo "\n";
        foreach($value as $key => $value){    
            //echo $key ." : ".$value. "\n";
            echo " ";
            echo $value;
            if ($value > $Vmax) {
               $Vmax = $value;
            }
            if ($value < $vMin) {
                $vMin = $value;
            }
        }
    }
}

echo "\n La valeur max est : ". $Vmax;
echo "\n La valeur min est : ". $vMin;
?>


