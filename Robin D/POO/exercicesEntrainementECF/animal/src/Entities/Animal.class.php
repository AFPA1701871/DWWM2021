<?php
    abstract class Animal implements Vivant {
        protected $_couleur;
        protected $_nombrePatte;

        public function get_couleur(){
            return $this->_couleur;
        }
    
        public function set_couleur($couleur){
            $this->_couleur = $couleur;
        }
    
        public function get_nombrePatte(){
            return $this->_nombrePatte;
        }
    
        public function set_nombrePatte($nombrePatte){
            $this->_nombrePatte = $nombrePatte;
        }

        public function __construct($couleur,$nombrePatte) {
            $this->set_couleur($couleur);
            $this->set_nombrePatte($nombrePatte);
        }

        abstract public function crier();

    }
?>