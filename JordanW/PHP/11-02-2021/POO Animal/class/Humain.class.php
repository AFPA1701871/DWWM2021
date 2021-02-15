<?php 

	class Humain implements iDeplacement {
        protected $_nom;

        public function __construct(String $nom){
            $this->_nom=$nom;
        }

        public function seDeplacer(){
            echo $this->get_nom() ." se déplace à pince!! \n";
        }

        public function get_nom(){
                return $this->_nom;
        }
    }

?>