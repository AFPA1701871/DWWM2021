<?php 

    Abstract class Animal implements iDeplacement{
        public $_couleur;
        public $_nombrePatte;

        public function __construct(String $couleur,int $_nombrePatte){
            $this->_couleur=$couleur;
            $this->_nombrePatte=$_nombrePatte;
        }
        
        Abstract public function crier();

        Abstract function seDeplacer();

    }

?>