<?php

    class Joueur{

        private $_vie;
        private $_score;

        public function __construct(){
            $this->_vie = 50;
            $this->_score = 0;
        }

        public function setVie($vie){
            $this->_vie = $vie;
        }

        public function getVie(){
            return $this->_vie;
        }

        public function setScore($score){
            $this->_score = $score;
        }

        public function getScore(){
            return $this->_score;
        }

        public function estVivant(){
            if ($this->_vie <= 0){
                return false;
            } else {
                return true;
            }
        }

        public function attaque($ennemi,$scorePotentiel){

            $lanceHeros = De::lanceLeDe();
            $lanceMonstre = De::lanceLeDe();
            echo "[Lancé du héros : " . $lanceHeros . " - Lancé du monstre : " . $lanceMonstre . "]\n";

            if ($lanceHeros >= $lanceMonstre){
                $ennemi->setVivant(false);
                echo "Le monstre est vaincu !\n";
                $this->setScore($this->getScore() + $scorePotentiel);
                return true;
            } else{
                return false;
            }

        }

        public function subitDegats(int $degats){
            $this->setVie($this->getVie() - $degats);
            echo "Le héros perd " . $degats . " points de vie, il lui en reste " . $this->getVie() . ".\n";
        }

        public function protection(){

            $lanceBouclier = De::lanceLeDe();
            echo "[Lancé bouclier : " . $lanceBouclier;
            
            if ($lanceBouclier <= 2){
                echo "] - Blocage réussi !\n";
                return true;
            } else {
                echo "] - Blocage raté !\n";
                return false;
            }

        }

    }

?>