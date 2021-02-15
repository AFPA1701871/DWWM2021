<?php
    class Personnage implements Mobile {
        protected $_nom;
        protected $_sex;

        public function get_Nom() {
            return $this->_nom;
        }
    
        public function set_Nom($nom) {
            $this->_nom = $nom;
        }
    
        public function get_Sex() {
            return $this->_sex;
        }
    
        public function set_Sex($sex) {
            $this->_sex = $sex;
        }

        public function __construct($nom,$sex) {
            $this->set_Nom($nom);
            $this->set_sex($sex);
        }

        public function seDeplace($nbCases) {
            echo $this->_nom." se déplace de ".$nbCases." cases\n";
        }
    }
?>