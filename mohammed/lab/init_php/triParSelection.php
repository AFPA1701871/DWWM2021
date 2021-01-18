<?php 
$tab=array(5,8,9,3,55,7,1,9,3);
$var=count($tab); // count va aficher le nombre de valeur de 1 a n
for ($i=0; $i <=$var-2; $i++) {  //count=9 alors que l'indice 9 hors  du tableau qui lui commence par 0
    $test=$i;
    for ($j=$i+1; $j <=$var-1; $j++) { 
        if ($tab[$i]>$tab[$j]) {
            $test=$j;
        }    
        
    }
        
  
           if ($test!=$i) {
             $tmp=$tab[$i];
             $tab[$i]=$tab[$test];
             $tab[$test]=$tmp;    
}           }   


echo implode("-",$tab);
?>