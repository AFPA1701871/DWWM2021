<?php
//tab w/ keys as index
$marks=array("Franck "=>14,"Kesary "=>16,"Jimmy "=>15); 
echo $key." ".$val."\n";

//add mark   
$marks["Houssam "]=15; 
    foreach ($marks as $key=>$val){  //instead of foreach, possible to use "printr" or "echo vardump" or...
        echo "\n".$key." ".$val;
    }
    echo "\n";

//supp mark via key
unset($marks["Franck "]); 
echo "\n";

echo "\n\nbest ".max($marks);
echo "\nlowest ".min($marks);
echo "\n\n";

//tri selon keys
echo "Dans l'ordre alphabétique \n";
ksort($marks); 
    foreach ($marks as $key=>$val){
        echo $key." ".$val."\n";
   }  

   //tri selon valeurs
echo "\nPar ordre de mérite \n";
arsort($marks);
    foreach ($marks as $key=>$val){
        echo $key." ".$val."\n";
    }
echo "\n"; 

//mean
$mean = array_sum($marks)/count($marks);
echo "Moyenne ".$mean;

?>