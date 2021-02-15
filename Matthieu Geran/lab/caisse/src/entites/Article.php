<?php

    class Article{

        private $libelle;
        private $description;
        private $prix;


        public function __construct($libelle,$description,$prix){
            $this->setLibelle($libelle);
            $this->setDescription($description);
            $this->setPrix($prix);
        }

        public function setLibelle($libelle){
            $this->_libelle = $libelle;
        }

        public function setDescription($description){
            $this->_description = $description;
        }

        public function setPrix($prix){
            $this->_prix = $prix;
        }

        public function getLibelle(){
            return $this->_libelle;
        }

        public function getDescription(){
            return $this->_description;
        }

        public function getPrix(){
            return $this->_prix;
        }

    }

?>