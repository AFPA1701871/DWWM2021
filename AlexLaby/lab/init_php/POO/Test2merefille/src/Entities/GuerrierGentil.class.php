<?php

    final class GuerrierGentil extends Guerrier{
        private $_gentilesse;
        public function __construct($nom,$pointsDeVie,$ptsForce,$gentilesse){
            Parent::__construct($nom,$pointsDeVie,$ptsForce);
            $this->_gentilesse=$gentilesse;
        }

        public function courbette(){
            echo "Le gentil guerrier se courbe";
        }
        public function ouvrirParam(){
            echo "J'ouvre les tools";
        }
    }

?>