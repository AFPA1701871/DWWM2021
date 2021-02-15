<?php
    class Mage extends Personnage {
        private $_magicPoints;

        public function set_magicPoints($magicPoints){
            $this->_magicPoints=$magicPoints;
        }

        public function get_magicPoints() {
            return $this->_magicPoints;
        }

        public function __construct($name,$sex,$magicPoints) {
            parent::__construct($name,$sex);
            $this->set_magicPoints($magicPoints);
        }

        public function parler() {
            echo "je me nomme ".$this->get_name()." et je suis un mage !\n";
        }

        final public function crier() {
            echo "je suis un mage et je vous suis en tout point supérieur !\n";
        }
    }
?>