<?php
class compte {
    private $_numeroCompte;
    private $_solde;
    public function __construct($numeroCompte,$solde){
        $this->_numeroCompte=$numeroCompte;
        $this ->_solde=$solde;
    }
     // getters
   public function get_numeroCompte(){
        return $this ->_numeroCompte;
    }
    public function get_solde(){
    return $this ->_solde;
    }
    //setters 
    public function set_numeroCompte($numeroCompte){
    $this ->_numeroCompte=$numeroCompte;
    }
    public function set_solde($solde){
    $this ->_solde=$solde;
    }
    //methode 
    public function afficherInfoCompte(){
        echo "numero de compte est :".$this->_numeroCompte;
        echo " votre solde est de :".$this->_solde;
    }
    public function retrait0($montantRerait){
        $this->_solde=$this->_solde-$montantRerait;
    }
    public function versement($versement) {
        $this->_solde=$this->_solde+$versement;
    }
    public function virment($virement){
        $this->retrait($virement);

    }
}
?>