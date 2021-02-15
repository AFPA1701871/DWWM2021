<?php

    Class Client {
        //Attributs
        private $_identifiant;
        private $_compteBancaire;

        //Setters et getters
        public function get_identifiant(){
            return $this->_identifiant;
        }
        public function set_identifiant(string $identifiant){
            $this->_identifiant = $identifiant;
        }
    
        public function get_compteBancaire(){
            return $this->_compteBancaire;
        }
        public function set_compteBancaire($compteBancaire){
            $this->_compteBancaire = $compteBancaire;
        }

        //Constructeur
        public function __construct($identifiant,$compteBancaire){
            $this->set_identifiant($identifiant);
            $this->set_compteBancaire($compteBancaire);
        }

    }

?>