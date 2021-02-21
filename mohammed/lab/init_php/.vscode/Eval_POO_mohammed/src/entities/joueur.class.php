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
        public function get_score(){
            return $this->_score;
        }
        //setters 
        public function set_score(){
           $this->_score++;
        }
        public function set_pointVie($pointVie){
             $this->_pointVie=$pointVie;
          } 
   


    //methode 
    
   public function EstVivant(){
       if ($this->_pointVie>0) {
           $bol=true;
        }
        return $bol; 
    }
   public function Attaque ( $De,$monstre  ){
       $De->get_nom();
       echo " le joueur joue :".$lancejoueur= $De->lanceDe()."\n";
      echo " le monstre joue ".$lanceMonstre=$De->lanceDe() ."\n";
      if ($lancejoueur>=$lanceMonstre) {
          echo " joueur gagne \n";
          echo "************************ monstre suivant \n";
          $this->_score++;
          $monstre ->set_vie(0);
      }
      
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