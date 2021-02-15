<?php

    class Produit{
        //Attributs de la classe produit
        private $_libellé;
        private $_prixUnitaire;
        private $_description;
        //Constructeur
        public function __construct($libellé,$prixUnitaire,$description){
            $this->setLibellé($libellé);
            $this->setPrixUnitaire($prixUnitaire);
            $this->setDescription($description);
        }
        //Les setters et getters pour pouvoir manipuler les attributs
        public function setLibellé(String $libellé){
            $this->_libellé=$libellé;
        }
        public function getLibellé(){
            return $this->_libellé;
        }
        public function setPrixUnitaire(int $prixUnitaire){
            $this->_prixUnitaire=$prixUnitaire;
        }
        public function getPrixUnitaire(){
            return $this->_prixUnitaire;
        }
        public function setDescription($description){
            $this->_description=$description;
        }
        public function getDescription(){
            return $this->_description;
        }
        
    }

?>