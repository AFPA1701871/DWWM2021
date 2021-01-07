<?php
$big=0;
$i=1;
$nb=1;
while ($nb!=0){
    $nb=readline("saisir un nombre");
    $i++;
        if ($nb!=0){
            if ($i=1){
                $big=$nb;
                $rang=$i;
            }
        } 
            else if ($nb>$big){
                $big=$nb;
                $rang=$i;
            }
}            
echo "le nombre le plus grand est $big\n";
echo "son rang est le $rang";  
?>    
