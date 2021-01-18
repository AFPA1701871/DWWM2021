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

$commande = readline("SQL :> ");
echo choixUser($commande);
/*
$commandeTab = explode(" ", $commande);
switch ($commandeTab[0])
case "Create":
    //créer toto avec entete (aeojaekn, ehaioyha, touze)
    break;
case "Insert" :
    // fopen "../BDD/".$commandeTab[1]


/*
//seConnecter($saisieLogin,$saisiePass);
if ((seConnecter($saisieLogin,$saisiePass)) == true){
    echo "Connexion réussie";
    $saisie = readline("SQL:>");
    
}else{
    s

}*/

?>