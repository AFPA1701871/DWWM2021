<?php
class joueur {
    private $_pointVie;
    private $_nom;
    private $_score;
       public function __construct (){
           $this->_pointVie=50;
           $this->_nom=" mon hero \n";
           $this->_score=0;

       }

       //getters
       public function get_nom(){
          return $this->_nom;
       } 
       public function get_pointVie(){
          return $this->_pointVie;
        } 
   


    //methode 
    public function score(){
        $this->_score++;
        return  $this->_score;
    }
   public function EstVivant(){
       if ($this->_pointVie>0) {
           echo " notre heros est toujours en vie \n";
           $bol=true; 
        }
         return $bol;
    }
   public function Attaque (){
       $jetHero=rand(1,6);
       return $jetHero;
   }
   public function SubitDegats(){
       $bouclier=rand(1,6);
       if ($bouclier<=2) {
           echo " attaque proteger par  bouclier pas de degat \n";
       }
       else {
           echo " vous perdez 10 point de vie \n";
           $this->_pointVie=$this->_pointVie-10;
       }
   }


}
?>