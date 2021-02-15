<?php
    class Mage extends Personnage {
        private $_magicPoints;

        public function set_magicPoints($magicPoints) {
            $this->_magicPoints=$magicPoints;
        }

        public function get_magicPoints() {
            return $this->_magicPoints;
        }

        public function __construct($nom,$sex,$magicPoints) {
            Parent::__construct($nom,$sex);
            $this->_magicPoints=$magicPoints;
        }
    }
?>