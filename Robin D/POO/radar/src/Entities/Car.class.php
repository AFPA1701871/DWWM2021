<?php
    class Car {
        private $_brand;
        private $_model;
        private $_registration;
        private $_color;
        private $_speed=0;

        public function setBrand($brand) {
            $this->_brand=$brand;
        }
        public function setModel($model) {
            $this->_model=$model;
        }
        public function setRegistration($registration) {
            $this->_registration=$registration;
        }
        public function setColor($color) {
            $this->_color=$color;
        }
        public function setSpeed($speed) {
            $this->_speed+=$speed;
        }

        public function getSpeed() {
            echo "la vitesse de la $this->_brand $this->_model de couleur $this->_color immatriculée $this->_registration est $this->_speed km/h !\n";
        }

        public function start() {
            echo "la $this->_brand $this->_model de couleur $this->_color immatriculée $this->_registration démarre et roule à $this->_speed km/h !\n";
        }
    }
?>