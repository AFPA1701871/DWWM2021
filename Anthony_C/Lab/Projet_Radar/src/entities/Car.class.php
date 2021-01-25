<?php
    class Car{
        private $_brand;
        private $_model;
        private $_registration;
        private $_color;
        private $_speed;

        public function toString(){
            return "\nMarque : ".$this->_brand."\nModèle : ".$this->_model."\nImmatriculer : ".$this->_registration."\nCouleur : ".$this->_color."\nVitesse : ".$this->_speed."km/h\n\n";
        }
        public function __construct(string $brand, string $model, $registration, string $color){
            $this->set_brand($brand);
            $this->set_model($model);
            $this->set_registration($registration);
            $this->set_color($color);
            $this->_speed = 0;
        }

        public function get_brand(){
            return $this->_brand;
        }

        public function set_brand($brand){
            $this->_brand = $brand;
        }

        public function get_model(){
            return $this->_model;
        }

        public function set_model($model){
            $this->_model = $model;
        }

        public function get_registration(){
            return $this->_registration;
        }

        public function set_registration($registration){
            $this->_registration = $registration;
        }

        public function get_color(){
            return $this->_color;
        }

        public function set_color($color){
            $this->_color = $color;
        }

        public function get_speed(){
            return $this->_speed;
        }

        public function set_speed($speed){
            $this->_speed = $speed;
        }

        public function accelerate($i){
            $acceleration = rand(1,25);
            $this->_speed += $acceleration;
            echo "La voiture $i de la marque $this->_brand du modèle $this->_model immatriculer $this->_registration et de couleur $this->_color vient d'accélérer de $acceleration km/h et roule maintenant à $this->_speed km/h.\n";
        }
    }
?>