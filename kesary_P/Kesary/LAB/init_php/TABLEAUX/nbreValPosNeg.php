<?php
//Je demande à l'user d'entrer la taille du tableau et en même temps je teste si la taille du tableau est un nombre valide
$tailleTab = readline("Entrez la taille du tableau : \n");

    while ($tailleTab <= 0 || (intdiv($tailleTab, 1) != $tailleTab)) {
        $tailleTab = readline("Recommencez : \n");
    }

//Initialisation des variables
$compteurPositif = 0;
$compteurNegatif = 0;

//Une boucle pour entrer les valeurs dans le tableau et vérification en même temps
for ($i=0; $i < $tailleTab; $i++) { 
    $tab[$i] = readline("Entrez un nombre dans le tableau :  \n");
    while ($tab[$i] == 0) {
        $tab[$i] = readline("Recommencez : \n");
    }
//Comptage des valeurs positives et négatives
    if ($tab[$i] > 0) {
        $compteurPositif++;
    }elseif ($tab[$i] < 0) {
        $compteurNegatif++;
    }
}
echo "\n";

//Affichage des résultats
echo "Le nombre de valeur positif est : ". $compteurPositif. " \n";
echo "Le nombre de valeur négative est : ". $compteurNegatif;
?>



