<?php
class Compte{
    protected $_numero;
    protected $_montant;

    public function __construct(string $numero, $montant){
        $this->_numero = $numero;
        $this->_montant = $montant;
    }

    //Getters
    public function get_numero(){
        return $this->_numero;
    }
    public function get_montant(){
        return $this->_montant;
    }
    //Setters
    public function set($numero){
        $this->_numero = $numero;
    }
    public function set_montant($montant){
        $this->_montant = $montant;
    }

    //Les méthodes
    public function debiter(){}
    public function crediter(){}

 
}
?>