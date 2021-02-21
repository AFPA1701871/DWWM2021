<?php
class ligneDeCommande {
    private $_produit;
    private $_quantite;
    public function __construct (produit $produit, int $quantite){
        $this->_produit=$produit;
        $this->_quantite=$quantite;
    }
    //getteres
    public function get_produit(){
        return $this->_produit;
    }
    public function get_quantite(){
        return $this->_quantite;
    }
    //setteres
    public function set_produit(produit $produit){
        $this->_produit=$produit;
    }
    public function set_quantite(int $quantite){
        $this->_quantite=$quantite;
    }
    //methode
    public function calculPrixLingeCommande(){
        return $total=$this->_quantite*$this->_produit->get_prixUnitaire();
    }
    public function affichageLigneCommande(){
       echo " le libelle du produit :". $this->_produit->get_libelle()."\n"
        ." la quantite est :".$this->_quantite."\n";
    }
    
}

?>