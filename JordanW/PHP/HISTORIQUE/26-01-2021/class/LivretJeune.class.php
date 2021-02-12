<?php 

    final class LivretJeune extends Livret {
        private $_taux=1.5;
        public function __construct(string $numeroCompte){
            parent::__construct($numeroCompte);
        }

        public function taux(){
            echo "Le taux d'un livret A est :". $this->_taux;
        }

        public function plafond(){
            echo "Le plafond d'un Livret A est 22900€";
        }

        public function recupereNom(){
            echo "recupere le nom : ". $this->_nom;
        }
        
    }

?>  