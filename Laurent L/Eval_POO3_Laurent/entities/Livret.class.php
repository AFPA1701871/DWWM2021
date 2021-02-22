<?php

    class Livret extends Compte{

        public function __construct($numero, $montant){
            Parent::__construct($numero, $montant);
        }

        //Méthodes
        public function appliqueInteret(float $pourcentage){
            echo "\nOn applique les intérêts au livret";
            $this->set_montant($this->_montant+($this->_montant*($pourcentage/100)));
        }

    }


?>