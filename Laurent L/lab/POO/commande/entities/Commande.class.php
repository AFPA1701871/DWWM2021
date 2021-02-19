<?php

    class Commande{
        private $_numeroCommande;
        private $_client;
        private $_ligneCommande;

        public function __construct($numeroCommande, $client, $ligneCommande){
            $this->set_numeroCommande($numeroCommande);
            $this->set_client($client);
            $this->set_ligneCommande($ligneCommande);
        }

        //Méthode
        public function affichageCommande(){

        }

        public function calculTotalTTC(){
            
        }


        //get et set
        public function get_numeroCommande(){
            return $this->_numeroCommande;
        }
        public function set_numeroCommande($numeroCommande){
            $this->_numeroCommande = $numeroCommande;
        }
        public function get_client(){
            return $this->_client;
        }
        public function set_client($client){
            $this->_client = $client;
        }
        public function get_ligneCommande(){
            return $this->_ligneCommande;
        }
        public function set_ligneCommande($ligneCommande){
            $this->_ligneCommande = $ligneCommande;
        }




    }    

?>