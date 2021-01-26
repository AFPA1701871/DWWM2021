<?php
    class Radar{
        //Permet de set la limitation de vitesse par rapport à la valeur encodée par l'utilisateur
        private $_limitationVitesse;
        public function __construct(int $inputUserVitesse){
            $this->setLimitationVitesse($inputUserVitesse);
        }
        public function setLimitationVitesse(int $radarReglé){
            $this->_limitationVitesse=$radarReglé;
        }
        public function getLimitationVitesse(){
            return $this->_limitationVitesse;
        }
        //Function flash pour flasher les véhicules roulant trop vite
        public function flash($stockVitesse, $i){
            if($stockVitesse<$this->_limitationVitesse){
                $pv=0;
            }else if($stockVitesse<=$this->_limitationVitesse+10 and $stockVitesse>$this->_limitationVitesse){
                echo "Voiture " . $i ." vous allez recevoir un pv";
                $pv=1;
                //${ "Voiture" . $i }->EcrituredePV();
            }else if($stockVitesse<=$this->_limitationVitesse+20){
                echo "Voiture " . $i." vous allez recevoir un pv";
                $pv=2;
                //${ "Voiture" . $i }->EcrituredePV();
            }else if($stockVitesse>=$this->_limitationVitesse+20){
                echo "Voiture " . $i ." rendez-vous à la gendarmerie";
                $pv=3;
                //${ "Voiture" . $i }->EcrituredePV();
            }
            return $pv;
        }

    }

?>