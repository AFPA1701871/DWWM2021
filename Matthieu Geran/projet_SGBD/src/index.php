<?php

    require("service/fonctions.php");
    
    do{

        $login = readline("Identifiant : ");
        $password = readline("Mot de passe : ");

    } while (!connexion($login,$password));

    //Début des commandes
    do{

        $commande = readline("SQL:> ");
        $commande = strtolower($commande); //En minuscules
        $commande = str_replace("("," ",$commande);
        $commande = str_replace(")"," ",$commande);
        $commande = str_replace(","," ",$commande);
        $commande = str_replace("'","",$commande);
        $commande = str_replace(";","",$commande);
        $commande = explode(" ",$commande); //Transforme en tableau
        $commande = array_filter($commande);
        
//je transforme les () , en espaces, qui servent à séparer en différentes cellules dans le tableau, et supprime les ' et ; voir l'ordre pour le respect synstaxe
        switch($commande){

            case $commande[0] == "create" and $commande[1] == "table" :
                create($commande);
                break;

            case $commande[0] == "insert" and $commande[1] == "into" and $commande[3] == "values":
                insert($commande);
                break;

            case $commande[0] == "select" and $commande[1] == "*" and $commande[2] == "from" :
                select($commande);
                break;

            default : echo "Mauvaise saisie\n";
        }
      

    } while ($commande<>"quit");

?>