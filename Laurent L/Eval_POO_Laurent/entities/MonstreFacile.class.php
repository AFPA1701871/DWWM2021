<?php

    class MonstreFacile{

        protected $_enVie;

        // Constructeur
        public function __construct($enVie){
            $this->set_enVie($enVie);
        }

        //Méthodes

        public function attaque(Joueur $gentil){
            $deGentil = De::lanceLeDe();
            $deMonstre = De::lanceLeDe();
            if ($deGentil<$deMonstre){
                // declenchement du bouclier
                $gentil->subitDegats();
               
            }
        }



        // get et set

        public function get_enVie(){
            return $this->_enVie;
        }

        public function set_enVie($enVie){
            $this->_enVie = $enVie;
        }

    }

?>