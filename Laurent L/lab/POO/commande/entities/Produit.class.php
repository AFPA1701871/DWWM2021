<?php

    class Produit{
        private $_libelle;
        private $_description;
        private $_reference;
        private $_prixUnitaireTTC;

        public function __construct($libelle,$description,$reference,float $prixUnitaireTTC){
            $this->set_libelle($libelle);
            $this->set_description($description);
            $this->set_reference($reference);
            $this->set_prixUnitaireTTC($prixUnitaireTTC);
        }

        //Méthode
        public function afficherSesInfos(){
            echo "\nLibellé : ".$this->_libelle."\nDescription : ".$this->_description."\nRéférence : ".$this->_reference."\nPrix unitaire TTC : ".$this->_prixUnitaireTTC." €\n";
        }



        //Get et Set
        public function get_libelle(){
            return $this->_libelle;
        }
        public function set_libelle($libelle){
            $this->_libelle = $libelle;
        }
        public function get_description(){
            return $this->_description;
        }
        public function set_description($description){
            $this->_description = $description;
        }
        public function get_reference(){
            return $this->_reference;
        }
        public function set_reference($reference){
            $this->_reference = $reference;
        }
        public function get_prixUnitaireTTC(){
            return $this->_prixUnitaireTTC;
        }
        public function set_prixUnitaireTTC($prixUnitaireTTC){
            $this->_prixUnitaireTTC = $prixUnitaireTTC;
        }

    }



?>