<?php
    class Radar{
        private $_vitesseMinPourFlash;
        private $_flash=false;

        public function set_vitesseMinPourFlash($_limiteVitesse){
            $this->_vitesseMinPourFlash=$_limiteVitesse+1;
            echo"la radar flashera tout vehicule a plus de $this->_vitesseMinPourFlash KM/H\n";
    }
        public function get_vitesseMinPourFlash(){
            return $this->_vitesseMinPourFlash;
    }
        public function get_flashRadar(){
            return $this->_flash;
    }
        public function flash($vitesseVehicule){
            if($vitesseVehicule>$this->_vitesseMinPourFlash){
            echo"le radar a flash une voiture\n";
            $this->_flash=true;
        }
    }
    }