<?php

class chasseur extends personnes implements seDeplacer{
  protected $_arme;
   
  public function __construct($arme){
        $this->_arme=$arme;
        parent::__construct();    
  }
  //getteres 
  // getteres
  public function get_nom(){
    return $this->_nom;
}
public function get_arme(){
    return $this->_arme;
}

    public  function chasser () {
       sleep(1);
      $tire=rand(1,6);
      if ( $tire==1 or $tire==6) {
        $bol=1;
      }
      else{
      $bol=2;
      }
      return $bol;
     }
     public function deplacment(){
     echo " le chasseur $this->_nom avance avec son $this->_arme ";
}

 }
?>