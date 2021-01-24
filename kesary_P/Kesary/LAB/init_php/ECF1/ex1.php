<?php
require("fonctionsEx1.php");
//Calcul sur le cercle
echo " \n";
echo "             CALCUL SUR LE CERCLE         \n";
echo " \n";
$rayon = readline("Quel est le rayon du cercle : ");

//Vérification de la saisie utilisateur
while ($rayon <= 0) {
    echo " Recommencez : ";
    $rayon = readline("Quel est le rayon du cercle : ");
}

//Appel de la fonction calcul circonférence
calculCirconference($rayon);
calculSurface($rayon);
echo " \n";

$reponse = readline("Voulez-vous faire un autre calcul (O/N) :");
echo " \n";
while (strtoupper($reponse) == "O") {
    $rayon = readline("Quel est le rayon du cercle : ");
    calculCirconference($rayon);
    calculSurface($rayon);
    echo " \n";
    $reponse = readline("Voulez-vous faire un autre calcul (O/N) :");
}
echo " \n";
echo "Au revoir et à bientôt";

?>