<?php

    class Animal{

        protected $_nbrePattes;
        protected $_poids;

        public function __construct (int $_nbrePattes, int $_poids){
            $this->set_nbrePattes($_nbrePattes);
            $this->set_poids($_poids);
        }

        public function manger($aliment){
            echo "Cet animal mange de la ".$aliment;
        }

        public function deplacement(){
            echo "\nCet animal se déplace grace à ses ".$this->_nbrePattes." pattes.\n";
        }

        public function get_nbrePattes(){
            return $this->_nbrePattes;
        }

        public function get_poids(){
            return $this->_poids;
        }

        public function set_poids($poids){
            $this->_poids = $poids;
        }

        public function set_nbrePattes($nbrePattes){
            $this->_nbrePattes = $nbrePattes;
        }



    }

?>