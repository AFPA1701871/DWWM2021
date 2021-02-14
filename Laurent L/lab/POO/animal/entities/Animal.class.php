<?php

    // require("IDeplacement.php");

    abstract class Animal implements IDeplacement{
        protected $_couleur;
        protected $_nbrePattes;

        public function __construct(string $couleur,int $nbrePattes){
            $this->set_couleur($couleur);
            $this->set_nbrePattes($nbrePattes);
        }

        // Méthodes

        abstract public function crier();
        



        // get et set

        public function get_couleur(){
            return $this->_couleur;
        }
        public function set_couleur($couleur){
            $this->_couleur = $couleur;
        }
       
        public function get_nbrePattes(){
            return $this->_nbrePattes;
        }
        public function set_nbrePattes($nbrePattes){
            $this->_nbrePattes = $nbrePattes;
        }

    }


?>