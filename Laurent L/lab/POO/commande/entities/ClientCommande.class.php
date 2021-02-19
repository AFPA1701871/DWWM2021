<?php

    class ClientCommande{
        private $_numeroClient;
        private $_nom;
        private $_prenom;

        public function __construct($numeroClient, $nom, $prenom){
            $this->set_numeroClient($numeroClient);
            $this->set_nom($nom);
            $this->set_prenom($prenom);
        }



        // get et set

        public function get_numero(){
            return $this->_numeroClient;
        }
        public function set_numeroClient($numeroClient){
            $this->_numeroClient = $numeroClient;
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