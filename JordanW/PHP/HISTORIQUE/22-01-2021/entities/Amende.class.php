<?php 

    class Amende{
        private $_point;
        private $_montant;
        private $_voiture;

        public function __construct(int $point,string $montant,Voiture $voiture){
            $this->setPoint($point);
            $this-> setMontant($montant);
            $this-> setVoiture($voiture);
        }
        private function getVoiture(){
            return $this-> _voiture;
        }
        private function setVoiture(Voiture $voiture){
            $this-> _voiture=$voiture;
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
            echo "Amende : ".$this->_montant ."\n";
            echo "Nombre de point en moins : ".$this->getPoint()."\n\n";
            echo "Pour la voiture :".$this->_voiture->getImmatriculation();
        }
    }

?>
