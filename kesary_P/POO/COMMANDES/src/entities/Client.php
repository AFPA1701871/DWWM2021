<?php

class Client{
    private $_nom;
    private $_prenom;
    private $_numeroClient;

    public function __construct(string $nom,string $prenom,string $numeroClient){
     $this->set_nom($nom);
     $this->set_prenom($prenom);
     $this->set_numeroClient($numeroClient);
    }

    //Getters
    public function get_nom(){
        return $this->_nom;
    }
    public function get_prenom(){
        return $this->_prenom;
    }
    public function get_numeroClient(){
        return $this->_numeroClient;
    }
    //Setters
    public function set_nom($nom){
        $this->_nom = $nom;
    }
    public function set_prenom($prenom){
        $this->_prenom = $prenom;
    }
    public function set_numeroClient($numeroClient){
        $this->_numeroClient = $numeroClient;
    }
}


?>