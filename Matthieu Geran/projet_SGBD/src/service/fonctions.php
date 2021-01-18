<?php

    function connexion($login,$password){
        
        $fichier = fopen("../BDD/config.ini", "r");
        $identifiants=array($login,$password);
        $compteur = 0;

        while (!feof($fichier)){ //Comparaison des identifiants rentrés avec les identifiants contenus dans config.ini (compteur pour ignorer login;password).

            $ligne = explode(";",fgets($fichier, 4096)); //Transformation de la ligne en tableau, avec l'identifant dans une cellule, et le mot de passe dans une autre.
            $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
            $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
            $ligne = str_replace("\t","",$ligne); //et les tabulations.

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
        return $connexion;
    }

    function create($commande){

        $fichier = fopen("../BDD/".$commande[2].".dwwm","w");

        for ($i=3;$i<count($commande);$i++){

            fputs($fichier,$commande[$i]);

            if ($i<>count($commande)-1){
                fputs($fichier,";");
            }
            
        }

    }

    function read(){



    }


?>