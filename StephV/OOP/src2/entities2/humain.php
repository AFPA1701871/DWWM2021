<?php
abstract class Humain implements SeDeplacer
{
    protected string $nom;

    public function __construct($nom){
        $this->set_nom=$nom;
    }
    public function get_nom(){
        return $this->nom;
    }
    public function seDeplacer(){}
            
    

}


?>