<?php
    abstract class Mage extends Personnage{
        private $_mana;

        public function __construct($nom,$prenom,$mana){
            Parent :: __construct($nom,$prenom);
            $this->_mana = $mana;
        }
    }
?>