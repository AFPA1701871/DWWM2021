<?php
    class Sniper extends Personnage{
        private $_puissance;

        public function __construct($_nom,$_grade,$_puissance){
            Parent::__construct($_nom,$_grade);
            $this->_puissance=$_puissance;
        }

        public function presentation(){
            echo"Je suis $this->_nom , "."un $this->_grade "."avec une puissance de $this->_puissance\n";
        }
        public function tirSniper(){
            echo"J'inflige des degats au sniper\n";
        }
    }