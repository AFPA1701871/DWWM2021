<?php
    class LigneCommande{
        private $_produit;
        private $_quantite;

        public function __construct(Produit $produit, int $quantite){
            $this->set_produit($produit);
            $this->set_quantite($quantite);
        }

        //Méthodes
        public function calculTotalLigneTTC(){
            return $this->_quantite * $this->_produit->get_prixUnitaireTTC();
        }

        public function affichage(){
            echo $this->_produit->get_reference()."  ".$this->_produit->get_libelle()."  ".$this->_quantite."  ".$this->_produit->get_prixUnitaireTTC()."  ".$this->calculTotalLigneTTC();
        }



        // get et set
        public function get_produit(){
            return $this->_produit;
        }
        public function set_produit($produit){
            $this->_produit = $produit;
        }
        public function get_quantite(){
            return $this->_quantite;
        }
        public function set_quantite($quantite){
            $this->_quantite = $quantite;
        }

    }

?>