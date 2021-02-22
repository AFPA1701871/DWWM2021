<?php

    $nb=0;
    $val=1;
    $somme=0;

    do{
        $nb=readline ("Entrez le nombre de valeur à saisir : ");
    } while ($nb<1 or $nb<(intdiv($nb, $val)) or $nb>(intdiv($nb, $val)));
        
    for ($i=1; $i<=$nb; $i++){
        $tableau[$i]=readline ("Entrez un nombre ". $i);
        $somme+=$tableau[$i]; 
    }
    
    echo "La somme est de : ".$somme;

?>