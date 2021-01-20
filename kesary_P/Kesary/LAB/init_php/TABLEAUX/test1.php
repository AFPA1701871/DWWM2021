<?php
 $tab = array(
    0 => array(
        0 => 0, 
        1 => 0, 
        2 => 0),
    1 => array(
        0 => 1,
        1 => 1,
        2 => 1),
    2 => array(
        0 => 2,
        1 => 2,
        2 => 2)
);

for($j=0; $j<3; $j++){
    echo "\n";  
    for($i=0; $i<3; $i++){
        echo " ";
        echo $tab[$i][$j];            
    }
}


//Ajout d'un élément 
array_push($tab,"Houssame",15);
//Affichage
for ($i=0; $i < count($tab); $i++) { 
    echo "\n";
    for ($j=0; $j < count($tab[$i]); $j++) {
        echo" \n"; 
        echo $tab[$i][$j];
    }
}

for ($i=0; $i < count($tab); $i++) { 
    echo "\n";
    for ($j=0; $j < count($tab[$i]); $j++) {
        echo" \n"; 
        echo $tab[$i][$j];
    }
}

?>