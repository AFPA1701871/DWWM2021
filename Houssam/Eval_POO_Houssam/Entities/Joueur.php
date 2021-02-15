<?php 

    class Joueur {

        private $_nom;
        private $_force=0;
        private $_score=0;
        private $_special;

        public function __construct($nom,$force,$score,$special){
            $this->_nom=$nom;
            $this->_force=$force;
            $this->_score=$score;
            $this->setSpecial($_nom);
        }

        public function setNom(){$this->_nom=$nom;}
        public function setForce(){$this->_force=$force;}
        public function setScore(){$this->_score=$score;}
        public function setSpecial($_nom){
            if ($nom == "MD"){
                $this->_special = $special;
            }
        }

        public function getNom(){return $this->_nom;}
        public function getForce(){return $this->_force;}
        public function getScore(){return $this->_score;}
        public function getSpecial(){return $this->_special;}
    }
    
?>