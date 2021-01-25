<?php
    class Radar {
        private $_speedMinForFlash;
        private $_radarFlashedACar=false;

        public function set_speedMinForFlash($speedLimit) {
            $this->_speedMinForFlash=$speedLimit+1;
            echo "le radar flashera les véhicules à partir de $this->_speedMinForFlash km/h !\n";
        }

        public function get_speedMinForFlash() {
            return $this->_speedMinForFlash;
        }
    
        public function get_radarFlashedACar() {
            return $this->_radarFlashedACar;
        }

        public function readSpeed($speedCar) {
            if ($speedCar >= $this->_speedMinForFlash ) {
                echo "le radar flash !\n";
                $this->_radarFlashedACar=true;
            }
        }
    }
?>