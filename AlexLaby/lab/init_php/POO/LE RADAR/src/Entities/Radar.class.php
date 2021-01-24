<?php
    class Radar{
        //permet de set la limitation de vitesse par rapport à la valeur encodée par l'utilisateur
        private $_limitationVitesse;
        public function __construct(int $inputUserVitesse){
            $this->set_LimitationVitesse($inputUserVitesse);
        }
        public function set_LimitationVitesse(int $vitesse){
            $this->_limitationVitesse=$vitesse;
        }
        public function get_LimitationVitesse(){
            return $this->_limitationVitesse;
        }
        //Function flash
    }

    

?>