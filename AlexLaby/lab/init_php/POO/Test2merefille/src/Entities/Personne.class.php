<?php

    class Personne {
        protected $_nom;
        protected $_pointsDeVie;

        public function __construct($nom,$pointsDeVie){
            $this->_nom=$nom;
            $this->_pointsDeVie=$pointsDeVie;
        }

      

        public function parler(){
            echo "Je suis un personnage qui s'appelle $this->_nom et qui à $this->_pointsDeVie points de vie. \n";
        }

        public function BoirePotion(){
            echo "Je bois une potion.\n";
        }

        public function Dormir(){
            echo "Je dors.\n";
        }
    }

?>