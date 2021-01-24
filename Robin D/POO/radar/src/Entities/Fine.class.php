<?php
    class Fine {
        private $_amount;

        public function setAmount($brand,$model,$registration,$color,$speedLimit,$speedCar) {
            if ($speedCar>=$speedLimit+10) {
                $this->_amount=45;
            }
            elseif ($speedCar>=$speedLimit+10) {
                $this->_amount=90;
            }
            else {
                $this->_amount="";
            }
        }
    }
?>