<?php
//Fusion de 2 tableaux triés (au départ)
$tab1 = [1,2,3,4,5];
$tab2 = [7,8,9,10,11,12,13,14,15];
$tab3 = [count($tab1) + count($tab2)];
$i =0; $j = 0; $k = 0;

//On fusionne les tableaux dans le plus grand
while ($i < count($tab1) && $j < count($tab2)) {
    if ($tab1[$i] < $tab2[$j]) {
        $tab3[$k] = $tab1[$i];
        $k++;
        $i++;
    }else {
        $tab3[$k] = $tab2[$j++];
        $k++;
        $j++;
    }
}
//S'il reste des éléments dans un des 2 tableaux
while ($i < count($tab1)) {
    $tab3[$k] = $tab1[$i];
        $k++;
        $i++;
}
while ($j < count($tab2)) {
    $tab3[$k] = $tab2[$j];
        $k++;
        $j++;
}

//Affichage
for ($k=0; $k < count($tab3) ; $k++) { 
    echo " ";
    echo $tab3[$k];
}
//echo "Fusion de deux tableaux triés : ". $tab3;
?>