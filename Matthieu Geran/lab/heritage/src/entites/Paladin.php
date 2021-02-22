<?php

    

    final class Paladin extends Personnage{

        private $pointsDeMana;

        public function __construct($pointsDeVie,$pointsDeMana){
            Parent::__construct($pointsDeVie);
            $this->setPointsDeMana($pointsDeMana);
        }

        public function setPointsDeMana($pointsDeMana){
            $this->_pointsDeMana = $pointsDeMana;
        }

        public function getPointsDeMana($pointsDeMana){
            return $this->_pointsDeMana;
        }

        public function sortSoin(){
            echo "*lance un sort de soin*";
        }

        public function direCaracteristiques(){
            echo "Je possède " . Parent::getPointsDeVie() . " points de vie et " . $this->_pointsDeMana . " points de mana.";
        }

        public function dialogue(){
            echo "Cherche groupe pour donjon";
        }

    }

?>