<?php
class monstre extends caractere {
    private $_nom="je suis le monste";
 
 public function __construct(){
     parent::__construct(rand(20,100),rand(5,10));
 }
 //getters
 public function get_lifepoint(){
     return $this->_lifepoint;
 }
 public function get_forcepoint(){
     return $this->_forcepoint;
 }
 public function get_nom(){
    return $this->_nom;
}
     //setters
 public function set_pseudo($lifepoint){
      $this->_lifepoint=$lifepoint;
 }
 public function set_score($forcepoint){
      $this->_forcepoint=$forcepoint;
 }

}
?>