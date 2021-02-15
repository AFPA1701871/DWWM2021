<?php
    require("./entities/IVocabulaire.php");
    abstract class Personnage implements IVocabulaire{
        protected $_nom;

        public function __construct(string $nom){
        $this->setNom($nom);
        }
        public function setNom(string $nom){
            $this->_nom=$nom;
        }
        public function getNom(){
            return $this->_nom;
        }

        abstract public function fraper(Personnage $personnage);

    }
?>