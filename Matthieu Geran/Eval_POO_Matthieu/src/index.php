<?php

    function chargementClasse($classe){ //On charge les classes automatiquement
        require("../entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    echo "1 - Mode avec trace\n2 - Mode sans trace\n";
    
    do{
        $mode = readline("Mode : "); //On demande à l'utilisateur s'il veut ou non afficher les textes (ça ammoche un peu le code mais au moins on donne le choix)
    }while ($mode <> 1 and $mode <> 2);

    $joueur = new Joueur; //Création du joueur

    $facilesVaincus = 0; //Pour l'affichage des scores à la fin
    $difficilesVaincus = 0;
    
    do{

        if (rand(1,2) == 1){ //Une chance sur deux de tomber sur un monstre facile, et de même pour le monstre difficile
            $monstre = new MonstreFacile; //Création du monstre facile
            $scorePotentiel = 1; //Point qui sera ajouté au score final si le joueur tue le monstre
            if ($mode == 1){ //J'ai ajouté ceci à chaque echo afin d'afficher le texte seulement si l'utilisateur le souhaite
                echo "****************** MONSTRE FACILE ******************\n";
            }

        } else {
            $monstre = new MonstreDifficile; //Création du monstre difficle
            $scorePotentiel = 2;
            if ($mode == 1){
                echo "**************** MONSTRE DIFFICILE *****************\n";
            }
        }

        $compteur = 1; //Pour afficher le nombre de tours du combat

        do{
            if ($mode == 1){
                echo "********************** TOUR $compteur **********************\n";
            }
            if ($joueur->attaque($monstre,$scorePotentiel,$mode)==false){ //On fait attaquer le joueur
                $monstre->attaque($joueur,$mode); //Le monstre attaque si le joueur ne l'a pas tué et celui-ci subira des dégâts seulement s'il ne bloque l'attaque du monstre
            }

            $compteur++;
        } while ($joueur->estVivant() == true and $monstre->getVivant() == true); //On continue le combat tant que le joueur et le monstre sont encore vivants
       
        if ($mode == 1){
            echo "****************************************************\n";
        }

        if ($scorePotentiel == 1 and $monstre->getVivant() == false){ //On attribue le/les point(s) selon le type de monstre
            $facilesVaincus += 1;
        } elseif ($scorePotentiel == 2 and $monstre->getVivant() == false) {
            $difficilesVaincus +=1;
        }

        if ($joueur->estVivant()){
            if ($mode == 1){
                echo "\n***************** MONSTRE SUIVANT ******************\n\n";
            }
        } else {
            echo "Dommage, vous êtes mort...\nCela dit, vous avez tué $facilesVaincus monstres faciles et $difficilesVaincus monstres difficiles.\nVous avez " . $joueur->getScore() . " points.";
        }

    }while ($joueur->estVivant()); //Le code s'exécute tant que le joueur est vivant

?>