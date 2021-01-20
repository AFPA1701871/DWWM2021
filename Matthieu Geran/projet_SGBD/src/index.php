<?php

    require("service/fonctions.php");
    
    do{

        $login = readline("Identifiant : ");
        $password = readline("Mot de passe : ");

    } while (!connexion($login,$password));

    //Début des commandes
    do{

        $commande = readline("SQL:> ");
        $commande = str_replace("("," ",$commande);
        $commande = str_replace(")"," ",$commande);
        $commande = str_replace(","," ",$commande);
        $commande = str_replace("'","",$commande);
        $commande = str_replace(";","",$commande);
        $commande = explode(" ",$commande); //Transforme en tableau
        $commande = array_filter($commande);
        
//je transforme les () , en espaces, qui servent à séparer en différentes cellules dans le tableau, et supprime les ' et ; voir l'ordre pour le respect synstaxe
        switch($commande){

            case strtolower($commande[0]) == "create" and strtolower($commande[1]) == "table" :
                create($commande);
                break;

            case strtolower($commande[0]) == "insert" and strtolower($commande[1]) == "into" and strtolower($commande[3]) == "values":
                insert($commande);
                break;

            case strtolower($commande[0]) == "select" and $commande[1] == "*" and strtolower($commande[2]) == "from" :
                selectTout($commande);
                break;

            case strtolower($commande[0]) == "select" and strtolower($commande[2]) == "from" :
                select($commande);
                break;
               
            case strtolower($commande[0]) == "select" and $commande[1] == "*" and strtolower($commande[2]) == "from" and strtolower($commande[4]) == "order" and strtolower($commande[5]) == "by" and (strtolower($commande[7]) == "asc" or strtolower($commande[7]) == "desc") :
                selectTri($commande);
                break;

            case strtolower($commande[0]) == "quit" :
                break;

            default : echo "Mauvaise saisie\n";
        }
      

    } while ($commande[0]<>"quit");

?>