<?php

    Class Chasseur extends Humain{
        //Attributs
        private $_arme;

        //Getters et setters
        public function getArme(){
            return $this->_arme;
        }
        public function setArme(string $arme){
            $this->_arme = $arme;
        }

        //Constructeur
        public function __construct($nom,$arme){
            parent::__construct($nom);
            $this->setArme($arme);
        }

        public function seDeplacer(){
            echo $this->getNom(). " se déplace avec son ". $this->getArme().". \n";
        }

        public function chasser(Animal $animal){
            echo $this->getNom(). " tire avec son fusil.\n";
            if(rand(1,6)==1 and 6){
                echo "le ". $animal->getRace(). " a été touché et est mort. :( \n";
                $animal->setEnVie(false);
                exit;
            }else{
                echo "le ". $animal->getRace()." n'a pas été touché. \n";
            }
        }

    }

?>