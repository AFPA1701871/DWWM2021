<?php

    require("service/fonctions.php");
    
    do{

        $login = readline("Identifiant : ");
        $password = readline("Mot de passe : ");

    } while (!connexion($login,$password));

    //Début des commandes
    do{

        $commande = readline("SQL:> ");
        $commande = strtolower($commande);
        $commande = explode(" ",$commande);

        switch($commande){

            case $commande[0] == "create" and $commande[1] == "table" :
                create($commande);
                break;

            default : echo "Mauvaise saisie\n";
        }
      

    } while ($commande<>"quit");

?>