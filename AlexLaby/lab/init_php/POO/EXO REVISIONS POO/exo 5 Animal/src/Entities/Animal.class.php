<?php

    abstract Class Animal implements Imobile{

        //Attributs
        protected $_race;
        protected $_couleur;
        protected $_nombrePatte;
        protected $_enVie;

        //Getters setters
        public function getEnVie(){
            return $this->_enVie;
        }
        public function setEnVie(bool $enVie){
            $this->_enVie = $enVie;
        }

        public function getCouleur(){
            return $this->_couleur;
        }
        public function setCouleur(string $couleur){
            $this->_couleur = $couleur;
        }
    
        public function getNombrePatte(){
            return $this->_nombrePatte;
        }
        public function setNombrePatte(int $nombrePatte){
            $this->_nombrePatte = $nombrePatte;
        }

        public function getRace(){
            return $this->_race;
        }
        public function setRace(String $race){
            $this->_race = $race;
        }

        //Constructeur
        public function __construct($race,$couleur,$nombrePatte,$enVie){
            $this->setCouleur($couleur);
            $this->setNombrePatte($nombrePatte);
            $this->setRace($race);
            $this->setEnVie($enVie);
        }

        //Pour crier
        public function crier(){
            echo "Le ". $this->getRace()." ".$this->getCouleur(). " glapie de peur. \n";
        }

    }

?>