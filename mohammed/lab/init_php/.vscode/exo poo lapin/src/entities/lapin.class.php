<?php
  class lapin extends animaux /*implements seDeplacer*/{
     protected $_vie;
      
     public function __construct(){
           $this->_vie="en vie";
           parent::__construct();    
     }
     //getterrs
     public function get_couleur(){
        return $this->_couleur;
    }
    public function get_pattes(){
        return $this->_pattes;
    }
    public function get_vie(){
        return $this->_vie;
    }
    // methode
    public function senourir(){
        echo " je mange dans les prairie  \n";
    }
    public function fuire(){
        $this->deplacment();
       
    }
    public function deplacment(){
       echo " le lapin $this->_couleur s’enfuie sur ses $this->_pattes pattes d’un seul bond\n";
}

 }
?>