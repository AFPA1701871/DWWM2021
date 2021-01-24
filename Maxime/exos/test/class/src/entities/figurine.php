<?php

    class Figurine{
        private $_taille=20;
        private $_reference="ACV";

        public function quelleFigurine(){
            echo "la figurine vient de $this->_reference et fait $this->_taille cm";
        }
    }

?>