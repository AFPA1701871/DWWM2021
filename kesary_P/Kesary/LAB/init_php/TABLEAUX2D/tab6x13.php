<?php
//Tableau de 6 sur 13 avec des zéros


for ($i=0; $i < 6; $i++) { 
    for ($j=0; $j < 13; $j++) { 
        $tab[$i][$j] = 0;
    }
}

//Affichage
for ($i=0; $i < 6; $i++) { 
    echo " \n";
    for ($j=0; $j < 13; $j++) { 
        echo " ";
        echo $tab[$i][$j];
    }
   
}

?>

