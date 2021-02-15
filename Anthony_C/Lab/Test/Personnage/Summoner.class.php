<?php
    require "iTalk.php";
    class Summoner extends Mage implements iTalk{
        private $_weapon;
        private $_pet;

        public function __construct($nom,$prenom,$mana,$weapon,$pet){
            Parent :: __construct($nom,$prenom,$mana);
            $this->_weapon = $weapon;
            $this->_pet = $pet;
        }

        public function parler(){
            echo "\nJe suis un Summoner, j'ai un/une ".$this->_weapon." et j'ai un/une ".$this->_pet." pour combattre a ma place.";
        }

        public function dance(){
            echo "\nJe dance";
        }
    }
?>