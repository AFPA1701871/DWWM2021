<?php

    abstract class Guerrier extends Personne{
        private $_ptsForce;

        public function __construct($nom,$pointsDeVie,$ptsForce){
            Parent::__construct($nom,$pointsDeVie);
            $this->_ptsForce=$ptsForce;
        }

        
        public function parler(){
            echo "Je suis un guerrier qui s'appelle $this->_nom et qui à $this->_pointsDeVie points de vie. J'ai $this->_ptsForce points de force.\n";
        }

        final public function coupDépée(){
            echo "J'inflige un coup d'épée\n";
        }
    }

?>