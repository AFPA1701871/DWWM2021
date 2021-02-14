<?php
    class MageDeFeu extends Mage {
        private $_fireDamage;

        public function set_fireDamage($fireDamage){
            $this->_fireDamage=$fireDamage;
        }

        public function get_fireDamage() {
            return $this->_fireDamage;
        }

        public function __construct($name,$sex,$magicPoints,$fireDamage) {
            parent::__construct($name,$sex,$magicPoints);
            $this->set_magicPoints($fireDamage);
        }

        public function lancerSortFeu() {
            echo $this->get_name()." lance un sort de feu";
        }
    }
?>