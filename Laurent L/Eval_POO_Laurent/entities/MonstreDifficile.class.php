<?php


    class MonstreDifficile extends MonstreFacile implements ISurnaturelle{

        public function __construct($enVie){
            Parent::__construct($enVie);
        }

        //Méthode

        public function attaque(Joueur $gentil){
            $deGentil = De::lanceLeDe();
            $deMonstre = De::lanceLeDe();
            if ($deGentil<$deMonstre){
                // declenchement du bouclier
                $gentil->subitDegats();               
            }
            
        }

        public function sort(Joueur $joueur){
            $deSort = De::lanceLeDe();
            if($deSort != 6){
                $pointVie = $joueur->get_pointVie()-($deSort*5);
                $joueur->set_pointVie($pointVie);
            }

        }

    }

?>