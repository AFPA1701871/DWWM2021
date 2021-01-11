<?php

    $nb=0;
    $val=1;

    do{
        $nb=readline ("Entrez le nombre de valeurs à saisir : ");
    } while ($nb<1 or $nb<(intdiv($nb, $val)) or $nb>(intdiv($nb, $val)))
    
    for ($i=1; $i<=$nb; $i++){
        $tab[$i]=readline ("Entrez le nombre n° ". $i);
        $tab[$i]+=1; 
    }
    
    foreach ($tab as $element) {
        echo $element."\n";
    }

?>