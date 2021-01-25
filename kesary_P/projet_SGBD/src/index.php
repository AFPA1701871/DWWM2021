<?php
//require("./service/lesFonctions.php");
require("./service/quitter.php");
require("./service/connexion.php");
require("./service/choixUser.php");

do{
    $saisieLogin = readline("Entrez votre login :");
    if ($saisieLogin == "quit") {
        exit;
    }
    $saisiePass = readline("Entrez votre mot de passe  : ");
    if ($saisiePass == "quit") {
        exit;
    }
    $connexion = seConnecter($saisieLogin,$saisiePass);
    if ($connexion)
        echo "Connexion réussie : \n";
    else
        echo "Impossible de se connecter, veuillez recommencer svp \n";
}while($connexion == false);

//$commande = readline("SQL :> ");
//choix($commande);
$boolQuit = true;

do {
    $commande = readline("SQL :> ");
    quitterProg($commande);
    choix($commande);
} while ($boolQuit==true);

//$commande = readline("SQL :> ");
//Vérification si plus de 25 caractères

 





?>