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
//Tri à bulle
$trouve = 1;

while ($trouve == 1) {
    $trouve = 0;
    for ($i=0; $i < $tailleTab-1; $i++) { 
        
        if ($tab[$i] < $tab[$i+1]) {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $trouve = 1;
        }
    } 
}
for ($i=0; $i < $tailleTab; $i++) { 
    echo " ";
    echo $tab[$i];
}

?>








