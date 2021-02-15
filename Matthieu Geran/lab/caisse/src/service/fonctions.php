<?php

    function chargement(){

        $fichier = fopen("../BDD/articles.txt", "r");
        $compteur = 0;
        $articles = array();

        while (!feof($fichier)){

                $ligne = explode(";",fgets($fichier, 4096)); //Transformation de la ligne en tableau
                $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
                $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
                $ligne = str_replace("\t","",$ligne); //et les tabulations.

                /*if ($compteur>0){
                    $libelle = $ligne[0];
                    $description = $ligne[1];
                    $prix = $ligne[2];
                    $$libelle = new Article($libelle,$description,$prix);
                    array_push($articles,$libelle);
                }*/
                $articles[$compteur][0] = $ligne[0];
                $articles[$compteur][1] = $ligne[1];
                $articles[$compteur][2] = $ligne[2];
                $compteur++;            
                
        }
        fclose($fichier);

        return $articles;

    }

    function liste($articles){

        for ($i=0;$i<count($articles);$i++){
            for ($j=0;$j<3;$j++){
                echo $articles[$i][$j];
                if ($j<2){
                    echo " / ";
                }
            }
            echo "\n";
        }

    }

    function achat($articles){

        $somme = 0;

        do{

            $choix = readline("Quel article souhaitez-vous acheter ? ");
            $colonne = array_column($articles,0);
            $indice = 0;
            $trouve = false;
            $fini = "toto";

            foreach ($colonne as $valeur){
                if ($choix == $valeur){
                    $trouve = true;
                    break;
                } else {
                    $indice++;
                }
            }

            if ($trouve){
                do{
                $quantite = readline("Combien en achetez-vous ? ");
                } while ($quantite <= 0);

                $somme += ($articles[$indice][2] * $quantite);

                $libelle = $articles[$indice][0];
                $description = $articles[$indice][1];
                $prix = $articles[$indice][2];
                $$libelle = new Article($libelle,$description,$prix);
                
                do{
                $fini = readline("Souhaitez-vous acheter un autre article ? (oui/non) ");
                } while (strtolower($fini) <> "oui" and strtolower($fini) <> "non");

            } else {
                echo "Article non trouvé.\n";
            }

        } while (!$trouve and strtolower($fini) <> "non");


    }

    function ticket($articles){

        echo "_______________________________________________\n";
        echo "Produit        Qté   Prix Unitaire   Prix Total\n";
        echo "_______________________________________________\n";
        echo $ecran->getLibelle();

    }
?>