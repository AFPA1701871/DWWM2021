<?php
    abstract class Personnage {
        protected $_name;
        protected $_sex;
        
        public function __construct($name,$sex) {
            $this->set_name($name);
            $this->set_sex($sex);
        }

        public function set_name($name){
            $this->_name = $name;
        }

        public function set_sex($sex){
            $this->_sex = $sex;
        }

        public function get_name() {
            return $this->_name;
        }

        public function get_sex() {
            return $this->_sex;
        }

        abstract public function parler();

        public function crier() {
            echo "je suis un personnage!\n";
        }


    }
    
?>