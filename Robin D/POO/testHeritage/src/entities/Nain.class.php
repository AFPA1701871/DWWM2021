<?php

    class Nain extends Personnage {
        private $_force;

        public function __construct($name,$sex,$force) {
            parent::__construct($name,$sex);
            $this->set_force($force);
        }

        public function set_force($force){
            $this->_force=$force;
        }

        public function get_force() {
            return $this->_force;
        }

        public function sePresenter() {
            echo "je suis un nain ".$this->get_sex()." ,je me nomme ".$this->get_name()." et ma force atteint les ".$this->get_force()." points\n";
        }

        public function frapper($persofrappe) {
            echo $this->get_name()." frappe ".$persofrappe->get_name()." et lui inflige ".$this->get_force()." points de dégâts\n";
        }
    }
    
?>