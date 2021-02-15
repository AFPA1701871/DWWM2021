<?php 

	class Lapin extends Animal {
    	public $_enVie;

        public function __construct(string $couleur,int $intNombrePatte){
            Parent::__construct($couleur,$intNombrePatte);
            $this->_enVie=true;
            echo "Le lapin ".$this->_couleur." à ". $this->_nombrePatte ."pattes a été créer \n";
        }

        public function seNourrir(){
            //echo "Miam Miam, c'est bon l'herbe !\n";
        }

        public function crier(){
            echo"Le lapin glapie de peur \n";
        } 

        public function fuir(){
            $this->seDeplacer();
        }

        public function seDeplacer(){
            echo "Le lapin ".$this->_couleur." s’enfuie sur ses ".$this->_nombrePatte." pattes d’un seul bond ! \n";
        }

    }

?>