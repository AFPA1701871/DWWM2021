<?php
abstract class Mage implements IMobile {
    protected $_name;

    public function __construct($name){
        $this->_name=$name;
    }
    public function getName(){
        return $this->_name;
    }

    public function téléportation(){
        return "téléportation";
    }
    
    abstract public function regarde();

    final public function invoque(){
        echo $this->_name." invoque un démon";
    }



}
?>