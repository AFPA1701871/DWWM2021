<?php

    class Client{
        private $_identifiant;
        private $_compteBancaire;

        public function __construct($identifiant, $compteBancaire){
            $this->set_identifiant($identifiant);
            $this->set_compteBancaire($compteBancaire);
        }





        // get et set

        public function get_identifiant(){
            return $this->_identifiant;
        }

        public function set_identifiant($identifiant){
            $this->_identifiant = $identifiant;
        }

        public function get_compteBancaire(){
            return $this->_compteBancaire;
        }

        public function set_compteBancaire($compteBancaire){
            $this->_compteBancaire = $compteBancaire;
        }




    }



?>