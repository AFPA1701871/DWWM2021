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

    function selectTout($commande){

        if (!file_exists("../BDD/".$commande[3].".dwwm")){
            echo "Fichier inexistant.\n";
            return;
        }

        $fichier = fopen("../BDD/".$commande[3].".dwwm","r");
        $longueur = 0;
        $j = 0;

        while (!feof($fichier)){

            $ligne = explode(";",fgets($fichier, 4096)); //On charge une ligne
            $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
            $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
            $ligne = str_replace("\t","",$ligne); //et les tabulations.
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

        $nbLignes = 0;

        foreach ($tableau as $valeur){
            $nbLignes++;
        }
        
        for ($k=0;$k<$nbLignes;$k++){ // Affichage du tableau

            for ($i=0;$i<$longueur;$i++){ //Lignes entre les valeurs (+ et -)

                if ($i==0 or $i==$longueur-1){
                    echo "+";
                } else {
                    echo "-";
                }
            }

            echo "\n";

            for ($i=0;$i<count($tableau[0]);$i++){ // | Valeur suivi des espaces jusqu'à ateindre l'espace que prend le mot plus long

                echo "| " . $tableau[$k][$i] . " ";

                if (strlen($tableau[$k][$i])!=$motsPlusLongs[$i]){
                    for ($j=0;$j<($motsPlusLongs[$i]-(strlen($tableau[$k][$i])));$j++){
                        echo " ";
                    }
                }

            }
            echo "|\n";
        } 
        
        for ($i=0;$i<$longueur;$i++){ // Dernière ligne (+ et -)

            if ($i==0 or $i==$longueur-1){
                echo "+";
            } else {
                echo "-";
            }
        }

        echo "\n";

    }

    function select($commande){

        if (!file_exists("../BDD/".$commande[3].".dwwm")){
            echo "Fichier inexistant.\n";
            return;
        }

        $fichier = fopen("../BDD/".$commande[3].".dwwm","r");

        $motPlusLong = 0;
        $j = 0;

        while (!feof($fichier)){

            $ligne = explode(";",fgets($fichier, 4096)); //On charge une ligne
            $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
            $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
            $ligne = str_replace("\t","",$ligne); //et les tabulations.

            for ($i=0;$i<count($ligne);$i++){

                $tableau[$j][$i] = $ligne[$i]; //On remplit un tableau en deux dimensions

                if (strlen($ligne[$i])>$motPlusLong){ //Calcul du mot le plus long pour chaque colonne
                    $motPlusLong = strlen($ligne[$i]); //On met les longueurs dans un tableau
                }

            }

            $j++;

        }
/* remplacé par $j
        $nbLignes = 0;

        foreach ($tableau as $valeur){
            $nbLignes++;
        } */

        $numColonne = 0;

        for ($i=0;$i<$j;$i++){ //remplacé $nbLignes par $j
            if ($tableau[0][$i]==$commande[1]){
                break;
            } else {
                $numColonne++;
            }
        }

        if ($numColonne<count($tableau)){
        $colonne = array_column($tableau, $numColonne);
        } else {
            echo "Nom de champ invalide.\n";
            fclose($fichier);
            return;
        }

        for ($i=0;$i<count($colonne);$i++){
            echo $colonne[$i] . "\n";
        }

        fclose($fichier);
    }

    function selectTri($commande){
        echo "banane";
    }
?>