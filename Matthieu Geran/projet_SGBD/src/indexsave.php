<?php

    require("service/fonctions.php");
    
    do{

        $fichier = fopen("../BDD/config.ini", "r");
        $login = readline("Identifiant : ");
        $password = readline("Mot de passe : ");
        $identifiants=array($login,$password);
        $compteur = 0;

        while (!feof($fichier)){ //Comparaison des identifiants rentrés avec les identifiants contenus dans config.ini (compteur pour ignorer login;password)

            $ligne = explode(";",fgets($fichier, 4096));

            if ($identifiants[0] == $ligne[0] and $identifiants[1] == $ligne[1] and $compteur>0){
                $connexion = true;
                break;
            }else{
                $connexion = false;
                $compteur++;
            }

        }

        if (!$connexion){
            echo "Mauvais identifiants, veuillez recommencer.\n";
        }

        fclose($fichier);

    } while (!$connexion);

    //Début des commandes
    do{

        $commande = readline("SQL:> ");

    

    } while ($commande<>"quit");

?>