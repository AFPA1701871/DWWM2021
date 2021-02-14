<?php
    class Produit{
        private $_libelle;
        private $_description;
        private $_unitPrice;

        public function __construct($libelle,$description,$unitPrice){
            $this->set_libelle($libelle);
            $this->set_description($description);
            $this->set_unitPrice($unitPrice);
        }

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

        public function get_unitPrice(){
            return $this->_unitPrice;
        }

        public function set_unitPrice($unitPrice){
            $this->_unitPrice = $unitPrice;
        }
    }
?>  