<?php

    $nbN=0;
    $nbP=0;
    $nb=0;
    $val=0;
    $nb2=1;
    
    do{
        $val=readline ("Entrez le nombre de valeurs à saisir : ");
    } while ($val<1 or $val<(intdiv($val, $nb2)) or $val>(intdiv($val, $nb2)));

    for ($i=1; $i<=$val; $i++){
        $tableau[$i]=readline ("Entrez un nombre ");
        if ($tableau[$i]>0){
            $nbP+=1;
        }else if($tableau[$i]<0){
            $nbN+=1;
        }else{
            $nb+=1;
        }
    }
    echo "Nombre de valeurs positives : ". $nbP."\n";
    echo "Nombre de valeurs negatives : ". $nbN."\n";
    echo "Nombre de 0 : ". $nb;

?>