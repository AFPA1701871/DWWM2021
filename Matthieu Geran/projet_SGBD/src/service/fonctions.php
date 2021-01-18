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
        
        if (file_exists("../BDD/".$commande[2].".dwwm")){
            echo "Nom de fichier déjà existant.\n";
            return;
        }

        for ($i=3;$i<count($commande);$i++){

            if (strlen($commande[$i])>25){
                echo "Nom de colonne trop long.\n";
                return;
            }

        }

        $fichier = fopen("../BDD/".$commande[2].".dwwm","w");
            
        for ($i=3;$i<count($commande);$i++){

            fputs($fichier,$commande[$i]);

            if ($i<>count($commande)-1){
                    fputs($fichier,";");
            }
                
        }

        fclose($fichier);

    }

    function insert($commande){

        if (!file_exists("../BDD/".$commande[2].".dwwm")){
            echo "Fichier introuvable.\n";
            return;
        }

            $fichier = fopen("../BDD/".$commande[2].".dwwm","r");
            $ligne = explode(";",fgets($fichier, 4096));
            $fichier = fopen("../BDD/".$commande[2].".dwwm","a");
            
        if ((count($commande)-4) == count($ligne)){

            fputs($fichier,"\n");

            for ($i=4;$i<count($commande);$i++){
                
                fputs($fichier,$commande[$i]);

                if ($i<>count($commande)-1){
                    fputs($fichier,";");
                }
                    
            }

        } else {
            echo "Le nombre de colonnes tapées ne correspond pas au nombre de colonnes du tableau.\n";
            
        }

        fclose($fichier);

    }

    function select($commande){

        if (!file_exists("../BDD/".$commande[3].".dwwm")){
            echo "Fichier inexistant.\n";
            return;
        }

        $fichier = fopen("../BDD/".$commande[3].".dwwm","r");
        $longueur = 0;
        $j = 0;

        while (!feof($fichier)){

            $ligne = explode(";",fgets($fichier, 4096)); //On charge une ligne
            $sommeLongueur = 0;
            $motPlusLong = 0;
            
            for ($i=0;$i<count($ligne);$i++){

                $tableau[$j][$i] = $ligne[$i]; //On remplit un tableau en deux dimensions
                $sommeLongueur += strlen($ligne[$i]); //Calcul de la longueur de la ligne

                if (strlen($ligne[$i])>$motPlusLong){ //Calcul du mot le plus long pour chaque colonne
                    $motsPlusLongs[$i] = strlen($ligne[$i]); //On met les longueurs dans un tableau
                }

            }

            if ($sommeLongueur>$longueur){ //Comparaison de la ligne la plus grande
                $longueur = $sommeLongueur + (2*count($tableau[0]));
            }

            $j++;

        }
        
        for ($k=0;$k<count($tableau[$k]);$k++){

            for ($i=0;$i<$longueur;$i++){ //Lignes entre les valeurs (+ et -)

                if ($i==0 or $i==$longueur-1){
                    echo "+";
                } else {
                    echo "-";
                }
            }

            echo "\n";

            for ($i=0;$i<count($tableau[$k]);$i++){ // | Valeur suivi des espaces jusqu'à ateindre l'espace que prend le mot plus long

                echo "| " . $tableau[$k][$i];

                for ($j=0;$j<($motsPlusLongs[$i]-(strlen($tableau[$k][$i])));$j++){
                    echo " ";
                }

            }
        
        }
        

        /*while (!feof($fichier)){
            
            $ligne = explode(";",fgets($fichier, 4096));

            for ($i=0;$i<count($ligne);$i++){
                
                $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
                $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
                $ligne = str_replace("\t","",$ligne); //et les tabulations.
                echo $ligne[$i] . " ";

            }

            echo "\n";
        }*/

    }

?>