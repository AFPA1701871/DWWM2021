<?php
class client {
    private $_nom;
    private $_prenom;
    private $numeroClient;
    public function __construct (string $nom,string $prenom, int $numeroClient){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_numeroClient=$numeroClient; 
    }
     //getters
     public function get_nom(){
        return $this->_nom;
    }
    public function get_prenom(){
        return $this->_prenom;
    }
    public function get_numeroClient(){
        return $this->_numeroClient;
    }
     //setters
     public function set_nom($nom){
       $this->_nom=$nom;
    }
    public function set_prenom($prenom){
         $this->_prenom=$prenom;
    }
    public function set_numeroClient($numeroClient){
        $this->_numeroClient=$numeroClient;
    }
    //methode 
    public function affichageClient(){
        echo" votre numero de client :".$this->_numeroClient."\n"
        ."votre nom :".$this->_nom."\n"
        ."votre prenom :".$this->_prenom."\n";
       }
}

?>