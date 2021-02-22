<?php

class Client{
    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;

    public function __construct(string $nom,string $prenom,$compte,$livret){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_compte = $compte;
        $this->_livret = $livret;
    }
    
    //Getters 
    public function get_nom(){
        return $this->_nom;
    }
    public function get_prenom(){
        return $this->_prenom;
    }
    public function get_compte(){
        return $this->_compte;
    }
    public function get_livret(){
        return $this->_livret;
    }

    //Setters
    public function set_nom($nom){
        $this->_nom = $nom;
    }
    public function set_prenom($prenom){
        $this->_prenom = $prenom;
    }
    public function set_compte($compte){
        $this->_compte = $compte;
    }
    public function set_livret($livret){
        $this->_livret = $livret;
    }

    public function recevoir(){}
    public function depenser(){}
    public function epargner(){}

    public function afficher(){
        echo "Le client ".$this->get_nom() ." " .$this->get_prenom(). " ". $this->get_numero();
    }
}


?>