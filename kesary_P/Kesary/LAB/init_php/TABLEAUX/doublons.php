<?php
//On demande la taille du tableau à l'utilisteur
$tailleTab = readline("Entrez la taille du tableau : \n");

//teste si la taille du tableau est valide
while ($tailleTab <= 0 || (intdiv($tailleTab, 1) != $tailleTab)) {
    $tailleTab = readline("Recommencez : \n");
}

$trouve = 0;
//Pas de vérification, c'est un tableau de nombre
for ($i=0; $i < $tailleTab; $i++) { 
    $tab[$i] = readline("Entrez une note dans le tableau :  \n");   
}

//Recherche de doublon
for ($i=0; $i < $tailleTab; $i++) { 
    for ($j=$i+1; $j < $tailleTab; $j++) { 
        if (($tab[$i]==$tab[$j]) && ($i != $j)) {
            $trouve = 1;
        }
    }
}

//Affichage résultat
if ($trouve==1) {
    echo "Il y a des doublons";
}else {
    echo"Il n'y a pas de doublons";
}

?>