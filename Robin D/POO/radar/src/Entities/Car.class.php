<?php
    class Car {
        private $_brand;
        private $_model;
        private $_registration;
        private $_color;
        private $_speed=0;

        public function set_Brand($brand) {
            $this->_brand=$brand;
        }
        public function set_Model($model) {
            $this->_model=$model;
        }
        public function set_Registration($registration) {
            $this->_registration=$registration;
        }
        public function set_Color($color) {
            $this->_color=$color;
        }
        public function set_Speed($speed) {
            $this->_speed=$speed;
        }

        public function get_Speed() {
            return $this->_speed;
        }

        public function get_Brand() {
            return $this->_brand;
        }

        public function get_Model() {
            return $this->_model;
        }

        public function get_Registration() {
            return $this->_registration;
        }

        public function get_Color() {
            return $this->_color;
        }

        
        public function __construct($brand,$model,$registration,$color) {
            $this->set_Brand($brand);
            $this->set_Model($model);
            $this->set_Registration($registration);
            $this->set_Color($color);
        }
        
        public function start() {
            echo "la $this->_brand $this->_model de couleur $this->_color immatriculée $this->_registration démarre et roule à $this->_speed km/h !\n";
        }

        public function increaseSpeed($speed) {
            $this->_speed+=$speed;
            echo "la voiture $this->_brand $this->_model de couleur $this->_color immatriculée $this->_registration vient d'accélérer de $speed km/h et roule désormais à $this->_speed km/h !\n";
        }
        
    }
?>