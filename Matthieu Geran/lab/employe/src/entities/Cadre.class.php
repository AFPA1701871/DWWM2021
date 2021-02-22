<?php

    class Cadre extends Employe{

        private $listeEmploye;

        public function __construct($nom,$prenom,$numSecu,$salaire,$job){
            Parent::__construct($nom,$prenom,$numSecu,$salaire,$job);
        }

        public function setListeEmploye(Array $listeEmploye){
            $this->_listeEmploye = $listeEmploye;
        }

        public function manage(){

        }

        public function augmenteUnSalarie(){
            
        }

    }

?>