<?php

    Class Chasseur extends Humain{
        //Attributs
        private $arme;

        //Getters et setters
        public function getArme(){
            return $this->arme;
        }
        public function setArme(string $arme){
            $this->arme = $arme;
        }

        //Constructeur
        public function __construct($nom,$arme){
            parent::__construct($nom);
            $this->setArme($arme);
        }

        public function seDeplacer(){
            
        }

        public function chasser(Animal $animal){

        }

    }

?>