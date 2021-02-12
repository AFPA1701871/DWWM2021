<?php

    abstract class Humain implements IMobile{
        //Attributs
        private $nom;

        //Getters setters
        public function getNom(){
            return $this->nom;
        }
        public function setNom(string $nom){
            $this->nom = $nom;
        }

        //Constructeur
        public function __construct($nom){
            $this->setNom($nom);
        }
    }
?>