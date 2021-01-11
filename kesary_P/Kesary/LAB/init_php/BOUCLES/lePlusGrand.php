<?php
$compteur = 0;
$max = 0;
$position = 0;
$saisie = readline("Entrez un nombre :");
//Vérification de la saisie utilisateur
while (! is_numeric($saisie)) {
    echo "Recommencez \n";
    $saisie = readline("Entrez un nombre :");
}
//Si l'utilisateur entre 0 à la première saisie, un message s'affiche
if ($saisie == 0) {
    echo "Il faut au moins saisir 2 nombres";
    echo "Recommencez :";
    $saisie = readline("Entrez un nombre : \n");

}
$compteur++;

//Si l'utilisateur entre 0 la saisie s'arrête
while ($saisie != 0) {
    $saisie = readline("Entrez un nombre :");
    $compteur++;
    for ($i=1; $i < $compteur ; $i++) { 
        if ($saisie > $max) {
            $max = $saisie;
            $position = $compteur;
        }
    }
}
echo "La valeur la plus élevée est " .$max. "\n";
echo "Sa position est : " .$position;
?>

