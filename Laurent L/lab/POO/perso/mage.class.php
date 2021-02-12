<?php
    require("IDeplacement.php");
    
    class Mage extends Personnage implements IDeplacement{

        private $_puissance;

        public function __construct(string $_nom, int $_puissance){
            Parent::__construct($_nom);     
            $this->_puissance = $_puissance;
        }

        public function saCapacite(){
            echo "\nMa capacite est celle de mage. Ma puissance est de ".$this->_puissance;
        }

        public function seDeplacer(){
            echo "\n".$this->_nom." se déplace en bottes de 7 lieux.";
        }




        public function get_puissance(){
            return $this->_puissance;
        }

        public function set_puissance($puissance){
            $this->_puissance = $puissance;
        }



    }

?>