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

        $indexFichier = array_search("from",$commande)+1; //Cherche l'index de la cellule où se trouve FROM pour trouver le nom du fichier

        if (!file_exists("../BDD/".$commande[$indexFichier].".dwwm")){
            echo "Fichier inexistant.\n";
            return;
        }

        $fichier = fopen("../BDD/".$commande[$indexFichier].".dwwm","r");

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

        $nbColonnes = count($ligne);

        for ($k=1;$k<array_search("from",$commande);$k++){ //Pour chaque nom de champs entre SELECT et FROM
            
            $numColonne = 0;

            for ($i=0;$i<$nbColonnes;$i++){
                if ($tableau[0][$i]==$commande[$k]){
                    break;
                } else {
                    $numColonne++;
                }
            }
        
        

            if ($numColonne<$nbColonnes){
                $colonne = array_column($tableau, $numColonne);
            } else {
                echo "Nom de champ invalide.\n";
                fclose($fichier);
                return;
            }

            for ($j=0;$j<count($colonne);$j++){
                echo $colonne[$j] . "\n";
            }

            echo "\n";

        }

        fclose($fichier);
    }

    function selectTri($commande){
        
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

        if(strtolower($commande[7]) == "asc" or strtolower($commande[7]) == "desc"){ //Tri du tableau selon la colonne choisie

            $sauvegarde = $tableau[0]; // Sauvegarde de l'en-tête car on va la supprimer, puis la rajouter afin de ne pas la trier           
            $nbColonnes = count($ligne);
            $numColonne = 0;

            for ($i=0;$i<$nbColonnes;$i++){
                if ($tableau[0][$i]==strtolower($commande[6])){
                    break;
                } else {
                    $numColonne++;
                }
            }

            unset($tableau[0]);            
            $colonneTri = array_column($tableau, $numColonne);

            if (strtolower($commande[7]) == "asc"){
                array_multisort($colonneTri,SORT_ASC,$tableau);
            } else {
                array_multisort($colonneTri,SORT_DESC,$tableau);
            }

            array_unshift($tableau, $sauvegarde);
            
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

    function verif($commande,$commandeVerif){

        /*$correct = true;
        $syntaxe = array("(",")",";");

        for ($i=0;$i<count($syntaxe);$i++){

            if (!strpos($commandeVerif,$syntaxe[$i])){
                $correct = false;
                echo "Syntaxe incorrecte, ".$syntaxe[$i]." manquant.\n";
            }

        }*/
        $correct = true;
        $erreur = "Syntaxe non respectée.";

        if (strtolower($commande[0]) == "create"){ // Vérifications de CREATE

            if (substr($commandeVerif,-2) <> ");"){
                $correct = false;
            }

            if (!strpos($commandeVerif,"(")){
                $correct = false;
            }

        }

        if (strtolower($commande[0]) == "insert"){ // Vérifications de INSERT

            if (substr($commandeVerif,-2) <> ");"){
                $correct = false;
            }

            if (!strpos($commandeVerif,"(")){
                $correct = false;
            }

            $commandeValeurs = substr($commandeVerif,strpos($commandeVerif,"("),-2); // A partir de la première parenthèse
            $commandeValeurs = explode(",",$commandeValeurs);

            foreach ($commandeValeurs as $valeur){
                if (substr($valeur,0,1) <> "'" and substr($valeur,-1) <> "'") {
                    $correct = false;
                    break; 
                }
            }  

        }

        if (strtolower($commande[0]) == "select"){ // Vérifications des SELECT

            if (substr($commandeVerif,-1) <> ";"){
                $correct = false;
            }

        }

        if (!$correct){ // Message d'erreur
            echo $erreur."\n";
        }

        return $correct;

    }
    
?>