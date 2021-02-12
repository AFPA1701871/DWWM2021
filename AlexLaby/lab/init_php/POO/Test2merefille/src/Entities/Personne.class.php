<?php
    require ("../Interface/iParam.php");
    abstract class Personne implements Paramètres{
        protected $_nom;
        protected $_pointsDeVie;

        public function __construct($nom,$pointsDeVie){
            $this->_nom=$nom;
            $this->_pointsDeVie=$pointsDeVie;
        }

      

    
        public function parler(){
            echo "Je suis un personnage qui s'appelle $this->_nom et qui à $this->_pointsDeVie points de vie. \n";
        }

        final public function BoirePotion(){
            echo "Je bois une potion.\n";
        }

    }

?>