<?php
  class De {
     private $_nom=" le De se lance !!! ";
        // methode 
        public function lanceDe(){
            $valeur=rand(1,6);
            return $valeur;
        }   
        //getters
        public function get_nom(){
            return $this->_nom;
        }
    }

?>