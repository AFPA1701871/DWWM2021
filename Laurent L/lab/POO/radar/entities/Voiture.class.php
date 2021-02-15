<?php
    class Voiture{
        //attributs
        private $_marque;
        private $_modele;
        private $_immatriculation;
        private $_couleur;
        private $_vitesse;
        private $_acceleration;

        //constructeur
        public function __construct($marque, $modele, $immat, $couleur){
            $this->set_marque($marque);
            $this->set_modele($modele);
            $this->set_immatricutalion($immat);
            $this->set_couleur($couleur);
        }

        //methodes

            //demarrage
        public function demarrage(){
            $this->set_vitesse(0);
        }

            //acceleration
        public function acceleration(){
            $acceleration = intval(rand(1,25));
            $this->set_acceleration($acceleration);
            $vitesse = $this->_vitesse + $this->_acceleration;
            $this->set_vitesse($vitesse);
            
        }

            //affichage acceleration et vitesse
        public function affichageAccelVitesse(){
            return "\nLa voiture immatriculée ".$this->_immatriculation.", de marque ".$this->_marque.", de type ".$this->_modele." et de couleur ".$this->_couleur." vient d'accélérer de ".$this->_acceleration." km/h et roule maintenant à ".$this->_vitesse." km/h.";
        }

            //getter et setter
        public function get_marque(){
            return $this->_marque;
        }

        public function set_marque($_marque){
            $this->_marque = $_marque;
        }

        public function get_modele(){
            return $this->_modele;
        }

        public function set_modele($_modele){
            $this->_modele = $_modele;
        }

        public function get_immatriculation(){
            return $this->_immatriculation;
        }

        public function set_immatricutalion($_immatriculation){
            $this->_immatriculation = $_immatriculation;
        }

        public function get_couleur(){
            return $this->_couleur;
        }

        public function set_couleur($_couleur){
            $this->_couleur = $_couleur;
        }

        public function get_vitesse(){
            return $this->_vitesse;
        }

        public function set_vitesse(int $_vitesse){
            $this->_vitesse = $_vitesse;
        }

        public function get_acceleration(){
            return $this->_acceleration;
        }

        public function set_acceleration($_acceleration){
            $this->_acceleration = $_acceleration;
        }
        
        


    }



?>