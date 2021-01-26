<?php

    class Voiture{
        //Attributs de la classe voiture
        private $_marque;
        private $_modele;
        private $_immatriculation;
        private $_couleur;
        private $_vitesse;
        //Constructeur
        public function __construct($marque,$modele,$immatriculation,$couleur){
            $this->setMarque($marque);
            $this->setModele($modele);
            $this->setImmat($immatriculation);
            $this->setCouleur($couleur);
            $this->_vitesse=0;
        }
        public function toString(){
            echo " \n Marque : $this->_marque \n Modèle : $this->_modele \n Immatriculation : $this->_immatriculation \n Couleur : $this->_couleur";
        }
        //Les setters et les getters pour pouvoir manipuler mes attributs
        public function setMarque(String $marque){
            $this->_marque=$marque;
        }
        public function getMarque(){
            return $this->_marque;
        }
        public function setModele($modele){
            $this->_modele=$modele;
        }
        public function getModele(){
            return $this->_modele;
        }
        public function setImmat($immatriculation){
            $this->_immatriculation=$immatriculation;
        }
        public function getImmat(){
            return $this->_immatriculation;
        }
        public function setCouleur(String $couleur){
            $this->_couleur=$couleur;
        }
        public function getCouleur(){
            return $this->_couleur;
        }
        public function setVitesse(Int $vitesse){
            $this->_vitesse=$vitesse;
        }
        public function getVitesse(){
            return $this->_vitesse;
        }
        public function demarrer($i){
            echo "La voiture $i démarre. \n";
        }
        public function accélérer(int $random,$i){
            $this->_vitesse+=$random;
            echo "La voiture $i avance à " . $this->_vitesse . "km/h" . "\n";
        }
    }

?>