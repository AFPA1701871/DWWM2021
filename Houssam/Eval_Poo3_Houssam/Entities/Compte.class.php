<?php

    class Compte {
        private $_numero;
        private $_montant;

        public function __construct( $numCompte, $solde){
            $this->_numero = $numCompte;
            $this->_montant = $solde;
        }

        public function setNumCompte(){
            $this->_numero=$numCompte;
        }

        public function setMontant(){
            $this->_montant=$solde;
        }

        public function getNum(){return $this->_numero;}
        public function getMontant(){return $this->_montant;}

    }