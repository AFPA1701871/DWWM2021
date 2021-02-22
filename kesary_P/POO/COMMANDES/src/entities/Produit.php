<?php

class Produit{
    public $_libelle;
    public $_description;
    public $_reference;
    public $_prixUnitaireTTC;

    // construteur
    public function __construct(string $libelle, string $description, string $reference, float $prixUnitaireTTC){
        $this->_libelle = $libelle;
        $this->_description = $description;
        $this->_reference = $reference;
        $this->_prixUnitaireTTC = $prixUnitaireTTC;
    }

    //Getters
    public function get_libelle(){
        return $this->_libelle;
    }
    public function get_description(){
        return $this->_description;
    }
    public function get_reference(){
        return $this->_reference;
    }
    public function get_prixUnitaireTTC(){
        return $this->_prixUnitaireTTC;
    }
    //Setters
    public function set_libelle($libelle){
        $this->_libelle = $libelle;
    }
    public function set_description($description){
        $this->_description = $description;
    }
    public function set_reference($reference){
        $this->_reference = $reference;
    }
    public function set_prixUnitaireTTC($prixUnitaireTTC){
        $this->_prixUnitaireTTC = $prixUnitaireTTC;
    }

    //Les Méthodes
    public function afficherSesInfos(){
        echo "Libelle : ".$this->_libelle. "\n";
        echo "Description : ".$this->_description. "\n";
        echo "Référence : ".$this->_reference. "\n";
        echo "Prix Unitaire TTC : ".$this->_prixUnitaireTTC. "\n";
    }

}

?>