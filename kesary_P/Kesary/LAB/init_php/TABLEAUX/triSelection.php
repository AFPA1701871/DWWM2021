<?php
//Tri Sélection : Ordre décroissant

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

//Tri par sélection
for ($i=0; $i < $tailleTab-2; $i++) { 
    $mini = $i;
    for ($j=$i+2; $j < $tailleTab-1; $j++) { 
        if ($tab[$j] > $tab[$mini]) {
            $mini = $j;
        }
    }
    if ($mini != $i) {
        $temp = $tab[$i];
        $tab[$i] = $tab[$mini];
        $tab[$mini] = $temp;
    }
}
//Affichage résultat
for ($i=0; $i < $tailleTab; $i++) { 
    echo " ";
    echo $tab[$i];
}

?>
