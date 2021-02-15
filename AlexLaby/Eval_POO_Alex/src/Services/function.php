<?php

    //Permet de démarrer l'aventure et aussi d'affronter des monstres différents
    function randomVS($joueur,$de){
        $monstreFacile= new MonstreFacile(true,'monstre facile');
        $monstreDifficile= new MonstreDifficile(true,'monstre difficile');
        $de->lanceLeDe($de);
        if($de->get_nombre()<=3){    
            echo "un ". $monstreFacile->get_nom() ." apparaît\n\n";
            while($monstreFacile->get_vivant()==true){
                $joueur->estVivant($monstreFacile,$monstreDifficile);
                $joueur->attaque($joueur,$monstreFacile,$de);
                readline(" ");
                if($monstreFacile->get_vivant()==false){
                    echo "Vous avez gagné votre combat !\n";
                    $joueur->set_score($joueur->get_score()+1);
                    echo "Votre score est maintenant de ". $joueur->get_score(). "\n";
                    readline("");
                    break;
                }
                $monstreFacile->attaque($joueur,$monstreFacile,$de);
                readline("");
            }
            randomVS($joueur,$de);
        }else{
            echo "un ". $monstreDifficile->get_nom() ." apparaît\n\n";
            while($monstreDifficile->get_vivant()==true){
                $joueur->estVivant($monstreFacile,$monstreDifficile);
                $joueur->attaque($joueur,$monstreDifficile,$de);
                readline(" ");
                if($monstreDifficile->get_vivant()==false){
                    echo "Vous avez gagné votre combat !\n";
                    $joueur->set_score($joueur->get_score()+2);
                    echo "Votre score est maintenant de ". $joueur->get_score(). "\n";
                    readline("");
                    break;
                }
                $monstreDifficile->attaque($joueur,$monstreDifficile,$de);
                readline("");
            }
            randomVS($joueur,$de);
        }

    
    }

?>