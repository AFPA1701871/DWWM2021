<?php

class Necromancer extends Mage implements IMobile{
    
    public function __construct($name){
        Parent::__construct($name);
    }

    public function regarde(){
        echo $this->_name." regarde l'horizon";
    }
    
    public function téléportation(){
        echo $this->_name." file vers le désert";
    }
}
?>