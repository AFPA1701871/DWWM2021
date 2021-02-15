<?php
abstract class caractere{
  protected  $_lifepoint;
  protected  $_forcepoint;

public function __construct($lifepoint,$forcepoint){
    $this->_lifepoint=$lifepoint;
    $this->_forcepoint=$forcepoint;
}
// getters
public function get_lifepoint(){
   return $this->_lifepoint;
}
public function get_forcepoint(){
    return $this->_forcepoint;
 }
 //setteres
 public function set_lifepoint($lifepoint){
     $this->_lifepoint=$lifepoint;
 }
 public function set_forcepoint($forcepoint){
     $this->_forcepointe=$forcepointe;
  }
  // methode attaque
   public function attaque(){
       echo " j'attaque ";
       $attaque =$lifepoint-$forcepoint;
       return $attaque;
   }
}
?>