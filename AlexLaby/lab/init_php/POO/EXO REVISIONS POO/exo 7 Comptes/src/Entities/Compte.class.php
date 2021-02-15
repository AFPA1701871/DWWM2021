<?php

    Class Compte {
        //Attributs
        private $_numeroCompte;
        private $_solde;

        //Setters et getters
        public function get_numeroCompte(){
            return $this->_numeroCompte;
        }
        public function set_numeroCompte(String $numeroCompte){
            $this->_numeroCompte = $numeroCompte;
        }
    
        public function get_solde(){
            return $this->_solde;
        }
        public function set_solde(Float $solde){
            $this->_solde = $solde;
        }

        //Constructeur
        public function __construct($numeroCompte,$solde){
            $this->set_numeroCompte($numeroCompte);
            $this->set_solde($solde);
        }
    }

?>