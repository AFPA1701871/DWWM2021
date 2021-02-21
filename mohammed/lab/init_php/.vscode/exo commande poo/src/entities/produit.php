<?php
class produit {
    private $_libelle;
    private $_desription;
    private $_reference;
    private $_prixUnitaire;    
    public function __construct (string $libelle,string $desription,int $reference,float $prixUnitaire){
        $this->_libelle=$libelle;
        $this->_desription=$desription;
        $this->_reference=$reference;
        $this->_prixUnitaire=$prixUnitaire;
    }
    //getters
    public function get_libelle(){
        return $this->_libelle;
    }
    public function get_desription(){
        return $this->_desription;
    }
    public function get_reference(){
        return $this->_reference;
    }
    public function get_prixUnitaire(){
        return $this->_prixUnitaire;
    }
    //setteres
    public function set_libelle($libelle){
         $this->_libelle=$libelle;
    }
    public function set_desription($desription){
         $this->_desription=$desription;
    }
    public function set_reference($reference){
         $this->_reference=$reference;
    }
    public function set_prixUnitaire($prixUnitaire){
         $this->_prixUnitaire=$prixUnitaire;
    }
    // methode
    public function afficheProduit(){
        echo  $this->_libelle."\n"
        .$this->_desription."\n"
        .$this->_reference."\n"
        .$this->_prixUnitaire."\n";
    }
    public function nombreProduit(){
        $nombreProduit=1;
        return $nombreProduit++;
    }
}
?>