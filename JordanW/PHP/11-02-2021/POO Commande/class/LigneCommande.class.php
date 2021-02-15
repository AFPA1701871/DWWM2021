<?php 

    class LigneCommande{
        public $_produit;
        public $_qte;

        public function __construct(Produit $produit,int $qte){
           $this->_produit=$produit;
           $this->_qte=$qte;
        }

        public function calculTotalLigneTTC(){
            return ($this->_produit->_prixUnitaireTTC*$this->_qte);
        }

        public function affichage(){
            return array($this->_produit->_reference,$this->_produit->_libelle,$this->_qte,$this->calculTotalLigneTTC());
        }
        
    }

?>