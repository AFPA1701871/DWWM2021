<?php
    class Lapin extends Animal{
        private $_enVie;

        public function get_enVie(){
            return $this->_enVie;
        }
    
        public function set_enVie($enVie){
            $this->_enVie = $enVie;
        }

        public function __construct($couleur,$nombrePatte,$enVie) {
            Parent::__construct($couleur,$nombrePatte);
            $this->set_enVie($enVie);
            echo "le lapin ".$this->_couleur." à ".$this->_nombrePatte." pattes a été créé\n";
        }

        public function seNourrir() {
            echo "Le lapin ".$this->_couleur." à ".$this->_nombrePatte." pattes se nourrie\n";
        }

        public function fuir() {
            echo "Le lapin ".$this->_couleur." s’enfuie sur ses ".$this->_nombrePatte." pattes d’un seul bond !\n";
        }

        public function crier() {
            echo "le lapin glapie de peur\n";
        }

        public function seDeplacer() {
            
        }
    }
?>