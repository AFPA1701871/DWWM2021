<?php
require("./service/lesFonctions.php");

echo "\n";
echo "*****************************************************************************\n";
echo "*                                  CHIFOUMI                                 *\n";
echo "*****************************************************************************\n";
//echo "\n";
echo "Voici la rège du jeu :\n";
echo "\n";
echo "1. La Pierre écrase les ciseaux       : La Pierre gagne\n";
echo "2. La Feuille enveloppe la Pierre     : La feuille gagne\n";
echo "3. Les ciseaux découpent la feuille   : Les Ciseaux gagnent\n";
echo "\n";
echo "\n";

//Appel fonction demande nom et prénom
$joueur = nomJoueur();
//appel fonction du choix de l'utilisateur
$reponseUser = choixUtilisateur();
//echo nombreAleatoire()."\n";
//$aleatoire = nombreAleatoire(). "\n";
nombreAleatoire();
//resultat($reponseUser);
$victoire = resultat($reponseUser);
if ($victoire) {
    insertionVainqueur($joueur);
    $demandeAffichage = voirListeGagnant();
    if ($demandeAffichage == "o") {
        afficheVainqueurs();
    }else {
        echo " \n";
        echo "Aurevoir et à bientôt.";
    }
}
?>