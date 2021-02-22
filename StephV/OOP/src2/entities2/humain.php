<?php
abstract class Humain implements SeDeplacer
{
    protected string $_nom;

    public function __construct($nom){
        $this->_nom=$nom;
    }

    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function getNom(){
        return $this->_nom;
    }      

    public function seDeplacer(){
        echo "Il se déplace lentement ";
    }    
    

}


?>