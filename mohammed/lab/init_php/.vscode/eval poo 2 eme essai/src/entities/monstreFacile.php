<?php
   class monstreFacile {
    protected $_pointVie;
    protected $_de;
    protected $_NbmonstreAbbatue;
         public function __construct(){
             $this->_pointVie=1;
             $this->_de=new de;
             $this->_NbmonstreAbbatue=0;
         } 
         public function getPointVie(){
             return $this->_pointVie;   
         }
         public function  getScore(){
            return $this->_score;
            }
            public function  getde(){
                return $this->_de;   
               } 
               public function setPointVie(){
                $this->_pointVie=0;   
            }   
        
         public function attaque( $joueur){
              if ($this->_de->lanceDe()>$joueur->getde()->lanceDe()) {
                  echo " c' est un monstre difficile ";
                  $joueur->bouclier();
                  return true;
              }else {
                  echo " hero gange .....";
                  $score =$joueur-> getScore()+2;
                  $joueur-> getScore($score);
                  $this->_pointVie=0;
                  $this->_NbmonstreAbbatue++;
                  return false;

              }   
         }
        
   }
?>