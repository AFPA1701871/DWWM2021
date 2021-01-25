<?php
    class Voiture{
        //attributs
        private $_marque;
        private $_modele;
        private $immatriculation;
        private $couleur;
        private $vitesse;




        //constructeur



        //methodes
        


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

        public function set_vitesse($_vitesse){
            $this->_vitesse = $_vitesse;
        }

        
        


    }



?>