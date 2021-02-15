<?php
    abstract class Personnage{
        private $_nom;
        private $_prenom;

        public function __construct($nom,$prenom){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
        }
        
        final public function welcome(){
            Echo "Hello.";
        }
    }
?>