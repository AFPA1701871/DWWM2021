<?php
    class Client{
        private $_nom;
        private $_prenom;

        public function __construct($nom,$prenom){
            $this->set_nom($nom);
            $this->set_prenom($prenom);
        }

        public function get_nom(){
            return $this->_nom;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }

        public function get_prenom(){
            return $this->_prenom;
        }

        public function set_prenom($prenom){
            $this->_prenom = $prenom;
        }
    }
?>