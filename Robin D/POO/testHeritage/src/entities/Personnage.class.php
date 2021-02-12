<?php
    class Personnage {
        protected $_name;
        protected $_sex;
        
        public function __construct($name,$sex) {
            $this->_name=$name;
            $this->_sex=$sex;
        }

        public function get_name() {
            return $this->_name;
        }

        public function get_sex() {
            return $this->_sex;
        }

        public function sePresenter() {
            echo "je suis un personnage ".$this->get_sex()." et je me nomme ".$this->get_name()."\n";
        }

        public function crier() {
            echo $this->get_name(). " se met à crier comme un dingue\n";
        }
    }
    
?>