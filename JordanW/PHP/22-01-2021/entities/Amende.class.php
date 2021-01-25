<?php 

    class Amende{
        private $_point;
        private $_montant;

        public function __construct(int $point,string $montant){
            $this->setPoint($point);
            $this-> setMontant($montant);
        }

        private function setPoint(int $point){
            $this-> _point = $point;
        }
        public function getPoint(){
            return $this-> _point;
        }
        public function setMontant(string $montant){
            $this-> _montant = $montant;
        }
        public function getMontant(){
            return $this-> _montant;
        }

        public function afficherAmende(){
            echo "Amende : ".$this->getMontant() ."\n";
            echo "Nombre de point en moins : ".$this->getPoint()."\n\n";
        }
    }

?>
