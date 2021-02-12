<?php

    Class Lapin extends Animal{
        //Attributs
        private $enVie;

        //Getters setters
        public function getEnVie(){
            return $this->enVie;
        }
        public function setEnVie(bool $enVie){
            $this->enVie = $enVie;
        }

        //Constructeur
        public function __construct($couleur,$nombrePatte,$enVie){
            parent::__construct($couleur,$nombrePatte);
            $this->setEnVie($enVie);
        }

        public function seDeplacer(){
            
        }

        public function seNourrir(){
            echo "Le lapin ". $this->getCouleur." se nourrit \n";

        }

        public function fuir(){

        }
    }
?>