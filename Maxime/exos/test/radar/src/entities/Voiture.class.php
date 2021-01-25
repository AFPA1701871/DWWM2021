<?php
    class Car{
        private $_marque;
        private $_modele;
        private $_immat;
        private $_couleur;
        private $_vitesse=0;

        public function setMarque($marque){
            $this->_marque=$marque;
        }
        public function setModele($modele){
            $this->_modele=$modele;
        }
        public function setImmat($immat){
            $this->_immat=$immat;
        }
        public function setCouleur($couleur){
            $this->_couleur=$couleur;
        }
        public function setVitesse($vitesse){
            $this->_vitesse+=$vitesse;
        }

        public function getVitesse(){
            echo "la vitesse de la $this->_marque $this->_modele de couleur $this->_couleur immatriculée $this->_immat est $this->_vitesse km/h !\n";
        }

        public function start(){
            echo "la $this->_marque $this->_modele de couleur $this->_couleur immatriculée $this->_immat démarre et roule à $this->_vitesse km/h !\n";
        }
    }
?>