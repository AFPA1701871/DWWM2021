<?php

    Class MonstreDifficile extends MonstreFacile{

        //Constructeur 
        public function __construct($nom,$vivant){
            Parent::__construct($nom,$vivant);
        }

        //Méthodes :

        //Pour attaquer (en implémentant le sort)
        public function attaque($joueur,$monstre,$de){
            $lancer2=$monstre->lanceLeDe($de);
            if($monstre->lanceLeDe($de)>$joueur->lanceLeDe($de)){
                echo $this->get_nom(). " attaque ". $joueur->get_pseudo();
                $bouclier=$joueur->lanceLeDe($de);
                if($bouclier<=2){
                    echo $joueur->get_pseudo(). " a contré avec son bouclier. \n";
                }else{
                    $joueur->set_pointsDeVie($joueur->get_pointsDeVie()-10);
                    echo $joueur->get_pseudo(). " a subit l'attaque du ".$monstre->get_nom().". Il lui reste ".$joueur->get_pointsDeVie() ." points de vie. \n";
                }       
            }else if($lancer2>$joueur->lanceLeDe($de)){
                if($lancer2!=6){
                    $degatsSubit=$lancer2*5;
                    return $degatsSubit;
                }
            }
        }

    }

?>