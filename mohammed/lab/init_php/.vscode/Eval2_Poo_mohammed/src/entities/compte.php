<?php
 class compte {
     protected $_numero;
     protected $_montant;
     public function __construct($numero,$montant){
         $this->_numero=$numero;
         $this->_montant=$montant;
     }
     //getteres
    public function get_numero(){
         return $this->_numero;
    }
    public function get_montant(){
        return $this->_montant;
    }
        //getteres
    public function set_numero($numero){
          $this->_numero=$numero;
    }
    public function set_montant($montant){
          $this->_montant=$montant;
    }
    //methode 
       // r
    public function debiter(int $debit){
        if ($this->_montant>$debit) {
            $this->_montant=$this->_montant-$debit;
        }else {
            echo " votre solde ne vous permet pas cette operation !!";
        }
        
    }
    public function crediter(int $credit){
        $this->_montant=$this->_montant+$credit;
    }


 }
?>