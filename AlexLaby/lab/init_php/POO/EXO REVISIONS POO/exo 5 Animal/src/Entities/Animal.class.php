<?php

    abstract Class Animal implements Imobile{

        //Attributs
        private $couleur;
        private $nombrePatte;

        //Setters et getters
        public function getCouleur(){
            return $this->couleur;
        }
        public function setCouleur(string $couleur){
            $this->couleur = $couleur;
        }
    
        public function getNombrePatte(){
            return $this->nombrePatte;
        }
        public function setNombrePatte(int $nombrePatte){
            $this->nombrePatte = $nombrePatte;
        }

        //Constructeur
        public function __construct($couleur,$nombrePatte){
            $this->setCouleur($couleur);
            $this->setNombrePatte($nombrePatte);
        }

        //Pour crier
        public function crier(){

        }

    }

?>