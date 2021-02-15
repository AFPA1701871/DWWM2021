<?php
    require "italk.php";
    class BlackMage extends Mage implements iTalk{
        private $_weapon;
        private $_blackMagic;

        public function __construct($nom,$prenom,$mana,$weapon,$bMagie){
            Parent :: __construct($nom,$prenom,$mana);
            $this->_weapon = $weapon;
            $this->_blackMagic = $bMagie;
        }

        public function parler(){
            echo "Je suis un Black Mage, j'ai un/une ".$this->_weapon."et je peux utiliser uniquement la magie noir puissante par contre je dois caster très longtemps.";
        }

        public function dance(){
            echo "Je dance";
        }
    }
?>