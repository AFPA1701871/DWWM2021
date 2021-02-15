<?php
   class monstreDifficile extends monstreFacile {
      private $_nom=" monstre difficile \n";
       public function __construct (){
           parent :: __construct ($vie);
       }
       //getters
       public function get_nom(){
           return $this->_nom;
        }

      // methode 
      public function AttaqueGrosMonstre($jethero){
        $jetMonstre=rand(1,6);
         
          return $jetMonstre;
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