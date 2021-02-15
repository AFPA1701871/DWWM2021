<?php
    abstract class Character {
        protected $_lifepoint;
        protected $_strenghtPoint;

        public function get_lifepoint(){
            return $this->_lifepoint;
        }
    
        public function set_lifepoint($lifepoint){
            $this->_lifepoint = $lifepoint;
        }
    
        public function get_strenghtPoint(){
            return $this->_strenghtPoint;
        }
    
        public function set_strenghtPoint($strenghtPoint){
            $this->_strenghtPoint = $strenghtPoint;
        }

        public function __construct($lifepoint,$strenghtPoint) {
            $this->set_lifepoint($lifepoint);
            $this->set_strenghtPoint($strenghtPoint);
        }

        abstract public function attack(Character $character);
    }
?>