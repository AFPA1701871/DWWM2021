<?php
//Je demande à l'user d'entrer la taille du tableau et en même temps je teste si la taille du tableau est un nombre valide
$tailleTab = readline("Entrez la taille du tableau : \n");

    while ($tailleTab <= 0 || (intdiv($tailleTab, 1) != $tailleTab)) {
        $tailleTab = readline("Recommencez : \n");
    }

//Initialisation des variables
$somme = 0;

//Une boucle pour entrer les valeurs dans le tableau | Pas de vérification on admet un nombre quelconque de valeur
//Calcul de la somme des valeurs du tableau
for ($i=0; $i < $tailleTab; $i++) { 
    $tab[$i] = readline("Entrez un nombre dans le tableau :  \n");
    $somme = $somme + $tab[$i];
}
echo "Voici le tableau : \n";

//Affichage du tableau
for ($i=0; $i < $tailleTab ; $i++) { 
    echo " ";
    echo $tab[$i];
}
echo "\n";
echo "La somme des valeurs du tableau est : ". $somme;
?>