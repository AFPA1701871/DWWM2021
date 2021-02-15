<?php
    abstract class Humain implements Vivant {
        protected $_nom;
    
        public function get_nom(){
            return $this->_nom;
        }
    
        public function set_nom($nom){
            $this->_nom = $nom;
        }

        public function __construct($nom) {
            $this->set_nom($nom);
        }

    }
?>