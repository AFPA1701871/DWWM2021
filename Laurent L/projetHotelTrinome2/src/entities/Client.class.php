<?php

    class Client {
        private $_numClient;
        private $_nom;
        private $_prenom;
        

        // Constructeur client

        public function __construct($numClient,$nom,$prenom){
            $this -> set_nom($nom);
            $this -> set_prenom($prenom);
            $this -> set_numClient($numClient);
           
        }


        // getter setter
        public function get_nom(){
            return $this->_nom;
        }

        public function get_prenom(){
            return $this->_prenom;
        }

        public function get_numClient(){
            return  $this->_numClient;
        }

        public function set_nom($_nom){
            $this->_nom = $_nom;
        }

        public function set_prenom($_prenom){
            $this->_prenom = $_prenom;
        }

        public function set_numClient($_numClient){
            $this->_numClient = $_numClient;
        }

       
        

    }

?>