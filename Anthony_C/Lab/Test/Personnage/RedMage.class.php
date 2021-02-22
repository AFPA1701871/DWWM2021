<?php
    require "italk.php";
    class RedMage extends Mage implements iTalk{
        private $_weapon;
        private $_blackMagic;
        private $_whiteMagic;

        public function __construct($nom,$prenom,$mana,$weapon,$bMagie,$wMagie){
            Parent :: __construct($nom,$prenom,$mana);
            $this->_weapon = $weapon;
            $this->_blackMagic = $bMagie;
            $this->_whiteMagic = $wMagie;
        }

        public function parler(){
            echo "Je suis un Red Mage, j'ai un/une ".$this->_weapon."et je peux utiliser deux type de magie la magie blanche et noire.";
        }

        public function dance(){
            echo "Je dance";
        }
    }
?>