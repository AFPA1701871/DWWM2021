<?php
    class Radar {
        private $_speedMinForFlash;

        public function set_speedMinForFlash($speedLimit) {
            $this->_speedMinForFlash=$speedLimit;
            echo "le radar flashera les véhicules à partir de $speedLimit km/h !\n";
        }
    
        public function readSpeed($speedLimit,$speedCar) {
            if ($speedCar>$speedLimit) {
                echo "le radar flash la $brand $model de couleur $color immatriculée $registration !\n";
                $newFind=new Fine;
                $newFind->setAmount($speedLimit,$speedCar);
            }
        }
    }
?>