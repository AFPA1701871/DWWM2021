<?php

    class Livret extends Compte{

        public function __construct($numero, $montant){
            Parent::__construct($numero, $montant);
        }

        //Méthodes

        //fonction qui calcul le montant d'interets dont le client bénéficie sur le montant de son livret
        //Le montant des interets est calculé avec le pourcentage fournit en argument
        //Le montant d'interet est directement additionner au montant du livret
        public function appliqueInteret(float $pourcentage){
            echo "\nOn applique les intérêts au livret";
            $this->set_montant($this->_montant+($this->_montant*($pourcentage/100)));
        }

    }


?>