<?php

    //require("IDeplacement.php");
    
    abstract class Humain implements IDeplacement{
        protected $_nom;

        public function __construct($nom){
            $this->set_nom($nom);
        }
    
        // Méthodes


        //get et set
        public function get_nom(){
            return $this->_nom;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }


    }

?>