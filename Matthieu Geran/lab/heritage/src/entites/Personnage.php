<?php

    require("../interfaces/iTechniques.php");

    abstract class Personnage implements iTechniques{

        protected $pointsDeVie;

        protected function __construct($pointsDeVie){
            $this->setPointsDeVie($pointsDeVie);
        }

        protected function setPointsDeVie($pointsDeVie){
            $this->_pointsDeVie = $pointsDeVie;
        }

        protected function getPointsDeVie(){
            return $this->_pointsDeVie;
        }

        abstract public function dialogue();

        final public function vanter(){
            echo "C'est moi le meilleur !";
        }

    }

?>