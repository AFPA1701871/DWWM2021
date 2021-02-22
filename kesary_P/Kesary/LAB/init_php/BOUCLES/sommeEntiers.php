<?php
$saisie = readline("Entrez un nombre :");
//Vérification de la saisie utilisateur
while (! is_numeric($saisie)) {
    echo "Recommencez \n";
    $saisie = readline("Entrez un nombre :");
}
//Si l'utilisateur entre 0 à la première saisie, un message s'affiche
if ($saisie == 0) {
    echo "Il faut au moins saisir 2 nombres pour faire une somme \n";
    echo "Recommencez :";
    $saisie = readline("Entrez un nombre : \n");

}
$somme =0;
for ($i=0; $i <= $saisie; $i++) { 
    $somme = $somme + $i;
}
echo"La somme est : ". $somme;
?>