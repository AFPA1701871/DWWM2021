<?php
    class Compte {
        private $_numero;
        private $_montant;

        public function __construct(string $_numero, int $_montant){
            $this->setNumero($_numero);
            $this->setMontant($_montant);
        }

        public function setNumero($_numero){
            $this->_numero=$_numero;
        }
        public function setMontant($_montant){
            $this->_montant=$_montant;
        }
        public function getNumero(){
            return $this->_numero;
        }
        public function getMontant(){
            return $this->_montant;
        }

        public function debiter($_numero,$_montant,$sommeaDebiter){
            $_montant+=$sommeaDebiter;
        }
        public function crediter($_numero,$_montant,$sommeaCrediter){
            $_montant-=$sommeaCrediter;
        }
        public function afficheCompte(){
            echo " a ".$this->getMontant()." euros sur son compte ".$this->getNumero();
        }
    }
?>