<?php

    class Ticket{
        //Attributs de la classe ticket
        private $_nomClient;
        private $_prenomClient;
        private $_listeProduit;
        private $_quantitéProduit;
        //Constructeur
        public function __construct($nomClient,$prenomClient,$listeProduit,$quantitéProduit){
            $this->setNom($nomClient);
            $this->setPrenom($prenomClient);
            $this->setListeProduit($listeProduit);
            $this->setQuantitéProduit($quantitéProduit);
        }
        //Les setters et getters pour pouvoir manipuler les attributs
        public function setNom(String $nomClient){
            $this->_nomClient=$nomClient;
        }
        public function getNom(){
            return $this->_nomClient;
        }
        public function setPrenom(String $prenomClient){
            $this->_prenomClient=$prenomClient;
        }
        public function getPrenom(){
            return $this->_prenomClient;
        }
        public function setListeProduit($listeProduit){
            $this->_listeProduit=$listeProduit;
        }
        public function getListeProduit(){
            return $this->_listeProduit;
        }
        public function setQuantitéProduit($quantitéProduit){
            $this->_quantitéProduit=$quantitéProduit;
        }
        public function getQuantitéProduit(){
            return $this->_quantitéProduit;
        }
        


    }

?>