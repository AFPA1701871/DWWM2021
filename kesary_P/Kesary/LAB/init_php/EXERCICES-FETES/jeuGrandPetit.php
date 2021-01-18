<?php
echo "Jeu : Deviner le nombre mystère\n";
echo "Entrez un nombre compris entre 10000 et 50000\n";
echo "Vous avez 15 tentatives pour trouver le nombre mystère";
echo "\n";
$nbreMystere = rand(10000,50000);
echo " $nbreMystere\n";
$compteur = 15;
echo $compteur."\n";

//Demande à l'utilisateur de saisir un nombre
$saisie = readline("Entrez un nombre compris entre 10000 et 50000  : ");

//Vérification 
if (! is_int($saisie)) {
    $compteur--;
    while ($saisie < 10000 || $saisie > 50000) {
        echo "Recommencez : \n";
        $saisie = readline("Entrez un nombre compris entre 10000 et 50000  : ");
    }
}
echo $compteur;
/*
if($saisie > $nbreMystere){
    echo "Plus petit";
}else if ($saisie < $nbreMystere) {
    echo"Plus grand";
}else {
    echo"Vous avez trouvez le nombre mystere\n";
    echo"Nombre total de coup : \n". $compteur;
    echo"Le nombre mystere est : ". $nbreMystere;
}*/

while ($saisie != $nbreMystere) {
    $compteur--;
    if ($saisie > $nbreMystere) {
        echo "Plus petit\n";
        $saisie = readline("Entrez un nombre compris entre 10000 et 50000  : ");
    }else {
        echo"plus grand\n";
        $saisie = readline("Entrez un nombre compris entre 10000 et 50000  : ");
    }
}
    echo"\n";
    echo "BRAVOOOOOOOO!!!!\n";
    echo"\n";
    echo"Vous avez trouvez le nombre mystere\n";
    echo"\n";
    echo"Le nombre mystere est : ". $nbreMystere."\n";
    echo"\n";
    echo"Nombre total de coup : ". $compteur."\n";
?>