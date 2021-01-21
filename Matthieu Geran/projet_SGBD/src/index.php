<?php

    require("service/fonctions.php");
    
    do{ // On tapes les indentifiants, qui seront comparés à ceux notés dans config.ini

        $login = readline("Identifiant : ");
        $password = readline("Mot de passe : ");

    } while (!connexion($login,$password));

    //Début des commandes
    do{

        $commande = readline("SQL:> ");
        $commandeVerif = $commande;
        $commande = str_replace("("," ",$commande);
        $commande = str_replace(")"," ",$commande);
        $commande = str_replace(","," ",$commande);
        $commande = str_replace("'","",$commande);
        $commande = str_replace(";","",$commande);
        $commande = explode(" ",$commande); //Transforme en tableau
        $commande = array_filter($commande);
        $erreur = true;

        if (strtolower($commande[0]) == "create" and strtolower($commande[1]) == "table"){
            if (verif($commande,$commandeVerif)){
            create($commande);                
            }
            $erreur = false;
        }

        if (strtolower($commande[0]) == "insert" and strtolower($commande[1]) == "into" and strtolower($commande[3]) == "values"){
            if (verif($commande,$commandeVerif)){
            insert($commande);
            }
            $erreur = false;
        }

        if (strtolower($commande[0]) == "select" and $commande[1] == "*" and strtolower($commande[2]) == "from"){
            if (count($commande)<5){
                if (verif($commande,$commandeVerif)){
                selectTout($commande); 
                }
            }
            $erreur = false;
        }

        if (strtolower($commande[0]) == "select" and in_array("from",$commande) and $commande[1]<>"*"){
            if (array_search("from",$commande)>=2){
                if (verif($commande,$commandeVerif)){
                select($commande);                    
                }                                          
            }
            $erreur = false;                 
        }
                            
        if (count($commande)>4 and strtolower($commande[0]) == "select" and $commande[1] == "*" and strtolower($commande[2]) == "from" and strtolower($commande[4]) == "order" and strtolower($commande[5]) == "by"){
            if (verif($commande,$commandeVerif)){
            selectTri($commande);
            $erreur = false;
            }
        }
        
        if (strtolower($commande[0]) == "quit"){
            $erreur = false;
        }

        if ($erreur){
            echo "Mauvaise saisie.\n";
        }

    } while ($commande[0]<>"quit");

?>