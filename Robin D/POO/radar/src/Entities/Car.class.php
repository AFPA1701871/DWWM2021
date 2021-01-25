<?php
    class Car {
        private $_brand;
        private $_model;
        private $_registration;
        private $_color;
        private $_speed=0;

        public function set_brand($brand) {
            $this->_brand=$brand;
        }
        public function set_model($model) {
            $this->_model=$model;
        }
        public function set_registration($registration) {
            $this->_registration=$registration;
        }
        public function set_color($color) {
            $this->_color=$color;
        }
        public function set_speed($speed) {
            $this->_speed=$speed;
        }

        public function get_speed() {
            return $this->_speed;
        }

        public function get_brand() {
            return $this->_brand;
        }

        public function get_model() {
            return $this->_model;
        }

        public function get_registration() {
            return $this->_registration;
        }

        public function get_color() {
            return $this->_color;
        }

        
        public function __construct($brand,$model,$registration,$color) {
            $this->set_brand($brand);
            $this->set_model($model);
            $this->set_registration($registration);
            $this->set_color($color);
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