<?php
 abstract class animaux {
     protected $_couleur;
     protected $_pattes;
        public function __construct(){
            $this->_couleur="blanc";
            $this->_pattes=4;
        }
        // getteres
        public function get_couleur(){
            return $this->_couleur;
        }
        public function get_pattes(){
            return $this->_pattes;
        }

     public function crier(){
         echo "\n le lapin $this->_couleur glapie de peur \n";
     }
 }
?>