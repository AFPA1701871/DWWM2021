<?php

    /**
     * function qui permet de créer un montre facile ou difficile en fonction
     * du pile ou face
     */
    function createMonster($withTrace){
        $piece=new De();
        if($piece->pileOuFace()==1){
            if($withTrace==1){
                echo "un monstre facile apparait\n";
            }
            return new MonstreFacile(true);
        }else{
            if($withTrace==1){
                echo "un monstre difficile apparait\n";
            }
            return new MonstreDifficile(false);
        }
    }

    /** fonction d'affichage de fin de partie */
    function finDePartie($monJoueur){
        echo "Dommage vous êtes mort....\n";
        echo "Cela dit vous avez tué  ".$monJoueur->getNbMonstreFacileTue(). " Monstre(s) facile(s) et ".$monJoueur->getNbMonstreDifficileTue(). " Monstre(s) difficile(s)\n";
        $score= $monJoueur->getNbMonstreFacileTue()+($monJoueur->getNbMonstreDifficileTue()*2);
        echo "votre score: ".$score;
    }

?>