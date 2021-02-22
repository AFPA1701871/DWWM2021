<?php

     class Compte {
         
        protected $_numero;
        protected $_montant;

        public function __construct($numero, $montant){
            $this->set_numero($numero);
            $this->set_montant($montant);
        }

        //Méthodes

        //fonction permettant de crediter une somme sur le compte
        // elle additionne le solde avec le montant du depot
        public function crediter($depot){
            $this->set_montant($this->_montant+$depot); 
        }
        
        //fonction permettant de debiter une somme sur le compte
        //Elle soustrait du solde le montant donné en argument
        public function debiter($retrait){
            $this->set_montant($this->_montant-$retrait);
        }

        // get et set
        public function get_numero(){
            return $this->_numero;
        }
        public function set_numero($numero){
            $this->_numero = $numero;
        }
        public function get_montant(){
            return $this->_montant;
        }
        public function set_montant($montant){
            $this->_montant = $montant;
        }

     }


?>