<?php

    class Chien extends Animal{
        private $_race;
        
        public function __construct(int $_nbrePattes, int $_poids, String $_race){
            Parent::__construct($_nbrePattes, $_poids);     
            // $this->set_race($_race);       
            $this->_race = $_race;
        }
        public function deplacement(){
            echo "Le ".$this->_race." se déplace grace à ses ".$this->_nbrePattes." pattes et malgré son poids de ".$this->_poids." kg, fait de nombreux trous grace à ses griffes.";
        }

        public function mordre(){
            echo "\nLe ".$this->_race." mord les cambrioleurs.";
        }

        public function get_race(){
            return $this->_race;
        }
        public function set_race($_race){
            $this->_race = $_race;
        }

    }

?>