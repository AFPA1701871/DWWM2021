<?php

    class Livret extends Compte {
        private $_soldeLivret;

        public function __construct($numCompte,$solde,$soldeLivret)
        {
            parent::__construct($numCompte,$solde);
            $this->_soldeLivret = $soldeLivret;
        }

        public function setSoldeLivret(){
            $this->_soldeLivret = $soldeLivret;
        }

        public function getSoldeLivret(){return $this->_soldeLivret;}


        public function appliqueInteret(){
            $solde = new Compte(1200);
            $solde = $this->_soldeLivret=+5;
        }
    }

?>