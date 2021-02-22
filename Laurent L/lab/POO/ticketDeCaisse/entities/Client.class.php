<?php

    class Client{

        private $_nom;
        private $_prenom;



        //constructeur



        //methodes



            //getter setter

        public function get_nom(){
            return $this->_nom;
        }

        public function set_nom($_nom){
            $this->_nom = $_nom;
        }

        public function get_prenom(){
            return $this->_prenom;
        }

        public function set_prenom($_prenom){
            $this->_prenom = $_prenom;
        }

    }




?>