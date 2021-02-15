<?php

    abstract class Personnage{
        protected $_nom;

        public function __construct (string $_nom){
            $this->set_nom($_nom);
        }

        final public function sePresenter(){
            echo "Je m'appelle ".$this->_nom;
        }

        abstract public function saCapacite();

        



        public function get_nom(){
            return $this->_nom;
        }

        public function set_nom($nom){
            $this->_nom = $nom;
        }

    }



?>