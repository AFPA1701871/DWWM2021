<?php

    abstract class Humain implements IMobile{
        //Attributs
        protected $_nom;

        //Getters setters
        public function getNom(){
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        //Constructeur
        public function __construct($nom){
            $this->setNom($nom);
        }
    }
?>