<?php

    Class Lapin extends Animal{

        //Constructeur
        public function __construct($race,$couleur,$nombrePatte,$enVie){
            parent::__construct($race,$couleur,$nombrePatte,$enVie);
        }

        public function seDeplacer(){
            echo "Le " .$this->getRace(). " fuit. \n";
        }

        public function seNourrir(){
            echo "Le " .$this->getRace() ." " .$this->getCouleur()." se nourrit. \n\n";
        }

        public function fuir($lapin){
            $lapin->seDeplacer();
        }
        public function crier(){
            echo "Le ". $this->getRace()." ".$this->getCouleur(). " glapie de peur. \n";
        }
    }
?>