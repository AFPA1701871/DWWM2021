<?php

    function chargementClasse($classe){ //On charge les classes automatiquement
        require("../entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    $joueur = new Joueur; //Création du joueur

    $facilesVaincus = 0; //Pour l'affichage des scores à la fin
    $difficilesVaincus = 0;
    
    do{

        if (rand(1,2) == 1){
            $monstre = new MonstreFacile;
            $scorePotentiel = 1;
            echo "****************** MONSTRE FACILE ******************\n";

        } else {
            $monstre = new MonstreDifficile;
            $scorePotentiel = 2;
            echo "**************** MONSTRE DIFFICILE *****************\n";
        }

        $compteur = 1;

        do{
            echo "********************** TOUR $compteur **********************\n";
            if ($joueur->attaque($monstre,$scorePotentiel,$mode)==false){
                $monstre->attaque($joueur,$mode);
            }

            $compteur++;
        } while ($joueur->estVivant() == true and $monstre->getVivant() == true);
        
        echo "****************************************************\n";

        if ($scorePotentiel == 1 and $monstre->getVivant() == false){
            $facilesVaincus += 1;
        } elseif ($scorePotentiel == 2 and $monstre->getVivant() == false) {
            $difficilesVaincus +=1;
        }

        if ($joueur->estVivant()){
            echo "\n***************** MONSTRE SUIVANT ******************\n\n";
        } else {
            echo "Dommage, vous êtes mort...\nCela dit, vous avez tué $facilesVaincus monstres faciles et $difficilesVaincus monstres difficiles.\nVous avez " . $joueur->getScore() . " points.";
        }

    }while ($joueur->estVivant());

?>