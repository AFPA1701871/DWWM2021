<?php
    class Livret{
        private $_numero;
        private $_montant;

    public function __construct(string $_numero, int $_montant){
        $this->setNum($_numero);
        $this->setMontant($_montant);
    }

    public function setNum($_numero){
        $this->_numero=$_numero;
    }
    public function setMontant($_montant){
        $this->_montant=$_montant;
    }
    public function getNumL(){
        return $this->_numero;
    }
    public function getMontantL(){
        return $this->_montant;
    }
    public function debiter($_numero,$_montant,$sommeaDebiter){
        $_montant+=$sommeaDebiter;
    }
    public function afficheLivret(){
        echo" et ".$this->getMontantL()." euros sur son livret ".$this->getNumL();
    }

    }
?>
