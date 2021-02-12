<?php
    class Gateau{
        protected $_ingredientDeBase;
        protected $_moule;

        public function __construct($ingredient,$moule){
            $this->set_ingredientDeBase($ingredient);
            $this->set_moule($moule);
        }

        public function get_ingredientDeBase(){
            return $this->_ingredientDeBase;
        }

        public function set_ingredientDeBase($ingredient){
            $this->_ingredientDeBase = $ingredient;
        }

        public function get_moule(){
            return $this->_moule;
        }

        public function set_moule($moule){
            $this->_moule = $moule;
        }

        public function etatActuel(){
            echo "Il y a juste les ingredients de base :".$this->_ingredientDeBase." et le moule :".$this->_moule;
        }

        public function commeTuVeux(){
            echo"Comme tu veux.";
        }
    }
?>