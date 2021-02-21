<?php

class LigneCommande{
    private $_produit;
    private $_qte;

    //Constructeur
    public function __construct(Produit $produit, int $qte){
        $this->_produit = $produit;
        $this->_qte = $qte;
    }
    
    //Getters
    public function get_produit(){
        return $this->_produit = $produit;
    }
    public function get_qte(){
        return $this->_qte = $qte;
    }

    //Setters
    public function set_produit($produit){
        $this->_produit = $produit;
    }
    public function set_qte($qte){
        $this->_qte = $qte;
    }

    //Les méthodes
    public function calculTotalLigneTTC(){
        return($this->_produit->_prixUnitaireTTC * $this->_qte);
        
    }

    public function affichage(){
        return array($this->_produit->_reference,$this->_produit->_libelle,$this->_qte,$this->calculTotalLigneTTC());
        
        }

    

}

?>