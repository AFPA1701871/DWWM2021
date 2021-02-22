<?php

    Abstract class Character{

        protected $_lifePoint;
        protected $_strenghtPoint;

        protected function __construct($lifePoint,$strenghtPoint){
            $this->setLifePoint($lifePoint);
            $this->setStrenghtPoint($strenghtPoint);
        }

        protected function setLifePoint(Int $lifePoint){
            $this->_lifePoint = $lifePoint;
        }

        protected function setStrenghtPoint(Int $strenghtPoint){
            $this->_strenghtPoint = $strenghtPoint;
        }

        public function getLifePoint(){
            return $this->_lifePoint;
        }

        public function getStrenghtPoint(){
            return $this->_strenghtPoint;
        }

        public function attack($ennemi){
            $ennemi->setLifePoint($ennemi->getLifePoint() - $this->_strenghtPoint);
        }

        public function vivant(){
            if ($this->_lifePoint <=0){
                return false;
            } else {
                return true;
            }
        }

    }

?>