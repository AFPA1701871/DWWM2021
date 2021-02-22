<?php

    class Client {
        private $_nom;
        private $_prenom;
        private $_compte;
        private $_livret;

        public function __construct($nom,$prenom,$compte,$livret){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
            $this->_compte=$compte;
            $this->_livret=$livret;
        }

        public function getNom(){return $this->_nom;}
        public function getPrenom(){return $this->_prenom;}
        public function getCompte(){return $this->_compte;}
        public function getLivret(){return $this->_livret;}

        public function setNom(){ $this->_nom=$nom;}
        public function setPrenom(){ $this->_prenom=$prenom;}
        public function setCompte(){ $this->_compte=$compte;}
        public function setLivret(){ $this->_livret=$livret;}


        // Je n'arrive pas à récupérer l'objet compte pour l'intégré dans l'affichage

        public function afficher(){
            //TEST echo "   Le client ".$this->getNom()." ".$this->getPrenom(). " a ".$this->getMontant()." sur son compte ".$this->getCompte()." et ".$this->getSoldeLivret()." sur son livret ".$this->getLivret() ;
            echo "   Le client ".$this->getNom()." ".$this->getPrenom(). " a ".$this->getCompte()." sur son compte ".$this->getCompte()." et ".$this->getLivret()." sur son livret ".$this->getLivret();
            sleep(1);
        }

    }

?>