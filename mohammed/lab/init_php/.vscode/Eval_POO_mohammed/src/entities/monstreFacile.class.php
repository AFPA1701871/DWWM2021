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
        return $this->_vie;
      }
        // setteres
      public function set_vie($vie){
          $this->_vie=$vie;
      }
     //methode
     public function AttaqueMonstre ($De,$joueur){
            $De->get_nom();
            echo " le monstre joue ".$lanceMonstre=$De->lanceDe() ."\n";
            echo " le joueur joue :".$lancejoueur= $De->lanceDe()."\n";
                  if ($lancejoueur>=$lanceMonstre) {
                        echo " joueur gagne \n";
                        echo "************************ monstre suivant \n";
                        $joueur-> set_score();
                        $this->set_vie(0);
                  }
                  else {
                     echo " monstre gange  on rejoue ....";
                     $joueur ->  SubitDegats();
                  }
        }
     

}
?>