<?php
 class player extends caractere {
   private $_pseudo;
   private  $_score=0;

public function __construct($pseudo){
    parent::__construct(100,20);
    $this->_pseudo=$pseudo;
    
}
//getters
public function get_pseudo(){
    return $this->_pseudo;
}
public function get_score(){
    return $this->_score;
}
public function get_lifepoint(){
    return $this->_lifepoint;
 }
 public function get_forcepoint(){
     return $this->_forcepoint;
  }
    //setters
public function set_pseudo($pseudo){
    return $this->_pseudo=$pseudo;
}
public function set_score($score){
    return $this->_score=$score;
}
public function set_lifepoint($lifepoint){
    $this->_lifepoint=$lifepoint;
}
public function set_forcepoint($forcepoint){
    $this->_forcepoint=$forcepoint;
 }

 
//fonction
public function bataille_monchot(){
    echo " mon tirrage face au monchot";
    $monTirage=rand(1,100);
    return  $monTirage;
}
 }
?>