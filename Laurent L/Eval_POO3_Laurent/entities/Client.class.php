<?php

    Class Client {
        
        private $_nom;
        private $_prenom;
        private $_compte;
        private $_livret;

        public function __construct($nom,$prenom,$compte,$livret){
            $this->set_nom($nom);
            $this->set_prenom($prenom);
            $this->set_compte($compte);
            $this->set_livret($livret);
        }

        //Méthodes

        //fonction permettant de créditer le montant en argument au solde du compte
        //avec en affichage le nom du client et un résumé de l'opération
        public function recevoir(int $depot){
            $this->_compte->crediter($depot);
            echo "\nLe client ".$this->_prenom." ".$this->_nom." reçoit ".$depot." €.";
            
        }

        //fonction permettant de débiter le montant en argument au solde du compte
        //avec en affichage le nom du client et un résumé de l'opération
        public function depenser(int $retrait){
            $this->_compte->debiter($retrait);
            echo "\nLe client ".$this->_prenom." ".$this->_nom." dépense ".$retrait." €.";
            
        }

        //fonction qui débite le montant mis en argument du compte  du client pour le crediter vers le livret du meme client
        public function epargner(int $epargne){
            echo "\nLe client ".$this->_prenom." ".$this->_nom." épargne ".$epargne." €.";
            $this->_compte->debiter($epargne);
            $this->_livret->crediter($epargne);
        }

        //fonction d'affichage de la situation du client
        public function affichageSituation(){
            echo "\nLe client ".$this->_nom." ".$this->_prenom." a ".$this->_compte->get_montant()." € sur son compte ".$this->_compte->get_numero()." et ".$this->_livret->get_montant()." € sur son livret ".$this->_livret->get_numero().".";
        }

        //get et set
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
        public function get_compte(){
            return $this->_compte;
        }
        public function set_compte($compte){
            $this->_compte = $compte;
        }
        public function get_livret(){         
            return $this->_livret;
        }
        public function set_livret($livret){
            $this->_livret = $livret;
        }
        
    }


?>