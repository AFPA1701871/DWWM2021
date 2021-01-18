<?php
//Inverser les éléménts d'untableau
$tab = [25,56,13,26];

//Affichage tableau
for ($i=0; $i < count($tab); $i++) { 
    echo " ";
    echo $tab[$i];
}
$longueur = intdiv(count($tab),2);
//echo $longueur;
echo"\n";
echo $tab[count($tab)-$i+1];
if (count($tab) >= 2) {
    for ($i=0; $i < $longueur ; $i++) { 
        $temp = $tab[$i];
        $tab[$i] = $tab[count($tab)-$i+1];
        $tab[count($tab)-$i+1] = $temp;
    }
}
for ($i=0; $i < count($tab); $i++) { 
    echo " ";
    echo $tab[$i];
}





?>

