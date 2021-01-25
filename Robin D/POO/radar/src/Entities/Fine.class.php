<?php
    class Fine {
        private $_amount;
        private $_pointsLess;

        public function set_amount($amount) {
            $this->_amount=$amount;
        }

        public function set_pointsLess($pointsLess) {
            $this->_pointsLess=$pointsLess;
        }

        public function get_Amount() {
            return $this->_amount;
        }

        public function get_pointsLess() {
            return $this->_pointsLess;
        }

        public function calculateFine($speedLimit,$speedCar) {
            if ($speedCar>=$speedLimit and $speedCar<=$speedLimit+10) {
                $this->set_amount(45);
                $this->set_pointsLess(1);
                echo "le PV contient une amende de 45 euros et un retrait de 1 point sur le permis !\n";
            }
            elseif ($speedCar>$speedLimit+10 and $speedCar<=$speedLimit+20) {
                $this->set_amount(90);
                $this->set_pointsLess(3);
                echo "le PV contient une amende de 90 euros et un retrait de 3 point sur le permis !\n";
            }
            else {
                echo "le PV contient une convocation à la gendarmerie !\n";
            }
        }

    }
?>