<?php

    function jeu(){

        $choix = array("PIERRE","PAPIER","CISEAUX");

        do{
            $egalite = false;

            do{
                $main = strtoupper(readline("PIERRE / PAPIER / CISEAUX ? "));
            } while ($main <> "PIERRE" and $main <> "PAPIER" and $main <> "CISEAUX");
       
            $indiceMain = array_rand($choix,1);
            $mainAdversaire = $choix[$indiceMain];
            echo "En face : $mainAdversaire\n";
                
            if ($main == $mainAdversaire){
                echo "Égalité ! On recommence.";
                $egalite = true;
            }

            if ($main == "PIERRE" and $mainAdversaire == "PAPIER"){
                $gagne = false;
                echo "Vous avez perdu.";
            }

            if ($main == "PIERRE" and $mainAdversaire == "CISEAUX"){
                $gagne = true;
                echo "Vous avez gagné !";
            }

            if ($main == "PAPIER" and $mainAdversaire == "PIERRE"){
                $gagne = true;
                echo "Vous avez gagné !";
            }

            if ($main == "PAPIER" and $mainAdversaire == "CISEAUX"){
                $gagne = false;
                echo "Vous avez perdu.";
            }

            if ($main == "CISEAUX" and $mainAdversaire == "PIERRE"){
                $gagne = false;
                echo "Vous avez perdu.";
            }

            if ($main == "CISEAUX" and $mainAdversaire == "PAPIER"){
                $gagne = true;
                echo "Vous avez gagné !";
            }

            echo "\n";

        } while ($egalite);

        return $gagne;
    }

    function gagnants($nom,$prenom,$reponse){

        $fichier = fopen("winners.txt", "a");
        fputs($fichier,"$nom;$prenom\n");
        $fichier = fopen("winners.txt", "r");

        echo "\n";

        if (strtolower($reponse) == "oui"){
            while (!feof($fichier)){

                $ligne = explode(";",fgets($fichier, 4096));
                $ligne = str_replace("\n","",$ligne); //On supprime les retours-chariot,
                $ligne = str_replace("\r","",$ligne); //les nouvelles lignes,
                $ligne = str_replace("\t","",$ligne); //et les tabulations.

                for ($i=0;$i<count($ligne);$i++){
                echo $ligne[$i] . " ";
                }

                echo "\n";

            }
        }

        fclose($fichier);

    }
?>