<?php
    class Radar {
        private $_speedMinForFlash;
    
        public function readSpeed($brand,$model,$registration,$color,$speedLimit,$speedCar) {
            if ($speedCar>$speedLimit) {
                echo "le radar flash la $brand $model de couleur $color immatriculée $registration !\n";
                $newFind=new Fine;
                $newFind->setAmount($brand,$model,$registration,$color,$speedLimit,$speedCar);
            }
        }
    }
?>