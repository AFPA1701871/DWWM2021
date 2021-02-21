<?php
   class monstreDifficile extends monstreFacile {
      private $_nom=" monstre difficile \n";
      private $_vie=1;
       public function __construct (){
           //parent :: __construct ($vie);
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
           return $this->_vie=$vie;
       }

      // methode 
      public function AttaqueMonstredificcile ( $De,  $joueur ){
        $De->get_nom();
        echo " le monstre difiicile joue ".$lanceMonstre=$De->lanceDe() ."\n";
        echo " le joueur joue :".$lancejoueur= $De->lanceDe()."\n";
       if ($lancejoueur>=$lanceMonstre) {
           echo " joueur gagne \n";
           echo "************************ monstre suivant \n";
           $joueur-> set_score();
           $this->set_vie(0);
       }
           else {
            $lancesort=$De->lanceDe();
            echo " le monstre difficle lance une nouvelle fois $lancesort \n";
                $joueur ->  SubitDegats();
                if ($lancesort!=6) {
                  echo " vous perdez :".$perdPoint=$lancesort*5;
                  $restePoint=$joueur-> get_pointVie()-$perdPoint;
                  $joueur-> set_pointVie($restePoint);
                  echo "\nle reste des point est ".$joueur->get_pointVie();
                }
           }
          
       }

      public function sort(){
          $sort=rand(1,6);
            if ($sort==6) {
                echo "pas de dommage";
            }
          else {
                $degat=$sort*5;
                echo " vous perder $degat point de vie \n";
                return $degat ;
            }

      }

   }
?>