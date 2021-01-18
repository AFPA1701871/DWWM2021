<?php
//Tri à bulle ordre décroissant

//On demande la taille du tableau à l'utilisteur
$tailleTab = readline("Entrez la taille du tableau : \n");

//teste si la taille du tableau est valide
while ($tailleTab <= 0 || (intdiv($tailleTab, 1) != $tailleTab)) {
    $tailleTab = readline("Recommencez : \n");
}
//Remplissage du tableau
for ($i=0; $i < $tailleTab; $i++) { 
    $tab[$i] = readline("Entrez un nombre:  \n");   
}
//Affichage du tableau
for ($i=0; $i < $tailleTab; $i++) { 
    echo " ";
    echo $tab[$i];
}
echo "\n";
$trouve1 = 1;
$trouve2 = 1;
if ($tailleTab != 1) {
    for ($i=0; $i > $tailleTab-1 ; $i++) { 
        if ($tab[$i]+1 != $tab[$i+1]) {
            $trouve1 = 0;
        }
        if ($tab[$i]-1 > $tab[$i+1]) {
            $trouve2 = 0;
        }

    }
}

//Si "trouve" est vrai, alors c'est consécutif
if ($trouv1 = 0 || $trouve2= 0) {
    echo "C'est pas consécutif";
}else {
    echo " consécutif";
}

?>

