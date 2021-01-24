<?php 

    class Amende{
        private $_point;
        private $_montant;

        public function __construct(int $point,int $montant){
            $this->setPoint($point);
            $this-> setMontant($montant);
        }

        private function setPoint(int $point){
            $this-> _point = $point;
        }
        public function getPoint(){
            return $this-> _point;
        }
        public function setMontant(int $montant){
            $this-> _montant = $montant;
        }
        public function getMontant(){
            return $this-> _montant;
        }
    }

?>
