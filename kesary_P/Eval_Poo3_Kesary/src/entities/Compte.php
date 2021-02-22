<?php
class Compte{
    protected $_numero;
    protected $_montant;

    public function __construct(string $numero, int $montant){
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
    public function debiter($montantAdebiter){
        echo "Le client depense 10€\n";
        $newSolde = $this->set_montant($this->get_montant() - $montantAdebiter);
        return $newSolde;

    }

    public function crediter(int $montantAcrediter){
        echo "Le client reçoit 50€\n";
        $newSolde = $this->set_montant($this->get_montant() + $montantAcrediter);
        return $newSolde;
    }

 
}
?>