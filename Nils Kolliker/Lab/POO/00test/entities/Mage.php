<?php
    final class Mage extends Personnage{
        private $_pM;

        public function __construct(string $nom,int $pM){
            Parent::__construct($nom);
            $this->setPM($pM);
        }

        public function setPM(int $pM){
            $this->_pM=$pM;
        }

        public function fraper(Personnage $personnage){
            echo $this->_nom." lance une boule de feu sur ".$personnage->getNom().".";
        }
        /*
        public function parler(){
            echo "Je suis ".$this->_nom.". Je suis un grand mage.\n";
        }
        */
    }
?>