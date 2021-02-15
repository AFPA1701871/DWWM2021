<?php
    class Lapin extends Animal{
        private $_enVie;

        public function __construct(string $couleur,int $nbrePattes){
            Parent::__construct($couleur, $nbrePattes);
            $this->set_enVie(true);
            echo "\nUn lapin ".$this->get_couleur()." à ".$this->get_nbrePattes()." pattes a été créé."; 
        }

        //Méthodes
        public function crier(){
            echo "\nLe Lapin ".$this->get_couleur()." glapie de peur.";
        }

        public function seNourir(){
            echo "\nLe lapin ".$this->get_couleur()." mange des carottes...";
        }

        public function fuir(){
            $this->seDeplacer();
        }

        public function seDeplacer(){
            echo "\nLe lapin ".$this->get_couleur()." s'enfuie sur ses ".$this->get_nbrePattes()." pattes d'un seul bond.";
        }

        // get et set

        public function get_enVie(){
            return $this->_enVie;
        }

        public function set_enVie($enVie){
            $this->_enVie = $enVie;
        }


    }


?>