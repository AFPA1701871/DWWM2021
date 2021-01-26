<?php
    class Personnage{
        protected $_nom;
        protected $_grade;

        public function __construct($_nom,$_grade){
            $this->_nom=$_nom;
            $this->_grade=$_grade;
        }
        public function set_nom($_nom){
            $this->_nom=$_nom;
        }
        public function get_nom(){
            return $this->_nom;
        }
        public function set_grade($_grade){
            $this->_grade=$_grade;
        }
        public function get_grade(){
            return $this->_grade;
        }
        public function armee(){
            echo"Je fais partie de l'armee de l'air\n";
        }

        public function presentation(){
            echo"Je suis $this->_nom , "."un $this->_grade\n";
        }
    } 

?>    