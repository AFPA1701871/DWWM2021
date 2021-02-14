<?php

    abstract class Character{
        protected $_lifePoint;
        protected $_strenghtPoint;

        public function __construct($lifePoint,$strenghtPoint){
            $this->set_lifePoint($lifePoint);
            $this->set_strenghtPoint($strenghtPoint);
        }

        //Méthodes

        public function attack(Character $perso){
            $pointVieRestant = $perso->get_lifePoint() - $this->get_strenghtPoint();
            $perso->set_lifePoint($pointVieRestant);
        }




        //getter setter

        public function get_lifePoint(){
            return $this->_lifePoint;
        }

        public function set_lifePoint($lifePoint){
            $this->_lifePoint = $lifePoint;
        }

        public function get_strenghtPoint(){
            return $this->_strenghtPoint;
        }

        public function set_strenghtPoint($strenghtPoint){
            $this->_strenghtPoint = $strenghtPoint;
        }


    }

?>