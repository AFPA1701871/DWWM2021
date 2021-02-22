<?php

class Commande{
    private $_numeroCommande;
    private $_client;
    private $_listeLigneCommande = [];

    //Constructeur
    public function __construct(string $numeroCommande, Client $client,$listeLigneCommande ){
        $this->_numeroCommande = $numeroCommande;
        $this->_client = $client;
        $this->_listeLigneCommande = $listeLigneCommande;
    }


    //Les méthodes
    public function afficherCommande(){

    }

    public function calculTotalTTC(){
        
    }
}
?>