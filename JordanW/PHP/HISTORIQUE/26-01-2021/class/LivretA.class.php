<?php 

final class LivretA extends Livret {
        private $_taux=0.5;
        public function __construct(string $numeroCompte){
            parent::__construct($numeroCompte);
        }

        public function taux(){
            echo "Le taux d'un livret Jeune est :". $this->_taux;
        }

        public function plafond(){
            echo "Le plafond d'un Livret Jeune est 15000";
        }

        public function recupereNom(){
            echo "recupere le nom : ". $this->_nom;
        }
        
    }

?>  