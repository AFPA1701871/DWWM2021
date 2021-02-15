<?php
class monstreFacile {
    private $_vie;
     public function __construct(){
        $this->_vie=1 ;
     }

     //getters
      public function get_nom(){
         return $this->_nom;
      }
      public function get_vie(){
        return $this->_nom;
     }
     //methode
     public function AttaquePetitMonstre(){
     $jetMonstre=rand(1,6);
       return $jetMonstre;
   }
}
?>