<?php
//On demande la taille du tableau à l'utilisteur
$tailleTab = readline("Entrez la taille du tableau : \n");

//teste si la taille du tableau est valide
while ($tailleTab <= 0 || (intdiv($tailleTab, 1) != $tailleTab)) {
    $tailleTab = readline("Recommencez : \n");
}

//Initialisation des variables
$somme = 0;
$moyenne = 0;
$nbreSup = 0;

//Une boucle pour entrer les valeurs dans le tableau | Vérification si le notes ne sont pas négatifs
//Calcul de la somme des valeurs du tableau pour déterminer la moyenne
for ($i=0; $i < $tailleTab; $i++) { 
    do{
        $tab[$i] = readline("Entrez une note dans le tableau :  \n");    
    }
    
   while (($tab[$i] < 0) || ($tab[$i] > 20)) ;{
        $somme = $somme + $tab[$i];   
    }
}
echo "Voici le tableau des notes : \n";
//Affichage du tableau
for ($i=0; $i < $tailleTab ; $i++) { 
    echo " ";
    echo $tab[$i];
}

//Calcul de la myenne
$moyenne = $somme/$i;
echo "\n";
echo "La moyenne est : " . $moyenne;

//Recherche des notes sup à la moyenne
for ($i=0; $i < $tailleTab; $i++) { 
    if ($tab[$i] >= $moyenne) {
        $tabSup[$i] = $tab[$i]; 
        //echo "notes sup : \n";
        echo " \n";
        echo $tabSup[$i];
        $nbreSup++;
    }
}
echo "\n";
echo "Il y a  " . $nbreSup . " note(s) au dessus de la moyenne \n";
?>


