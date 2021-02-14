<?php

    final class GuerrierMechant extends Guerrier{
        private $_méchanceté;
        public function __construct($nom,$pointsDeVie,$ptsForce,$méchanceté){
            Parent::__construct($nom,$pointsDeVie,$ptsForce);
            $this->_méchanceté=$méchanceté;
        }
        public function ouvrirParam(){
            echo "J'ouvre les paramètres";
        }
        
    }

?>