<?php

    class Client{
        private $_nom;
        private $_prenom;
        private $_compte;
        private $_livret;

    public function __construct(string $_nom, string $_prenom, $_compte, $_livret){
        $this->setNom($_nom);
        $this->setPrenom($_prenom);
        $this->setCompte($_compte);
        $this->setLivret($_livret);
        }

    public function setNom($_nom){
        $this->_nom=$_nom;
    }
    public function setPrenom($_prenom){
        $this->_prenom=$_prenom;
    }
    public function setCompte($_compte){
        $this->_compte=$_compte;
    }
    public function setLivret($_livret){
        $this->_livret=$_livret;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getCompte(){
        return $this->_compte;
    }
    public function getLivret(){
        return $this->_livret;
    }

    public function recevoir($_montantBase,$sommeaCrediter){
        $_montantBase+=$sommeaCrediter;
        echo $_montantBase;
    }

    public function depenser(Compte $_montant,$sommeaDebiter){
        $_montant-=$sommeaDebiter;
    }
    public function affiche(){
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." ";
    }
    }



?>