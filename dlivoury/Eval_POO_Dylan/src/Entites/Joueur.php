<?php
    class Joueur {
        private $_pointDeVie;
        private $_pointAttaque; 

    
        public function __construct(){
            $this->_pointDeVie=setPointDeVie()
            $this->
        }
        public function setPointDeVie($_pointDeVie){
            $this->_pointDeVie=$_pointDeVie;
        }
        public function getPointDeVie(){
            return $this->_pointDeVie;
        }
        public function setPointAttaque($_pointAttaque){
            $this->_pointAttaque=$_pointAttaque;
        }
        public function getPointAttaque(){
            return $this->_pointAttaque;
        }    
    }