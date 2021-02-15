<?php

    class MonstreFacile{

        private $_vivant;

        public function __construct(){
            $this->_vivant = true;
        }

        public function setVivant(bool $vivant){
            $this->_vivant = $vivant;
        }

        public function getVivant(){
            return $this->_vivant;
        }

        public function attaque($ennemi){
            if ($ennemi->protection() == false){
                $ennemi->subitDegats(10);
            }
        }

    }


?>