<?php
    class joueur {
       private $_pointVie;
       private $_score;
       private $_de;

       public function __construct(){
           $this->_pointVie=50;
           $this->_score=0;
           $this->_de=new de;
       }
       public function  getPonitVie(){
           return $this->_pointVie;
       }
       public function  setPonitVie($pointvie){
        return $this->_pointVie=$pointvie;
      } 
       public function  getScore(){
             return $this->_score;
         }

         public function  getde(){
            return $this->_de;

           } 
         public function  setScore($score){
                 $this->_score=$score;
            }
        
         public function attaque($monstre){
            $lance=($this->_de->lanceDe()) ;
          echo ($this->_de->lanceDe());
          // echo $lance."\n";
            if (  $lance>=$monstre->getde()->lanceDe()){
             //   echo $lance."\n";
                $monstre->setPointVie();
                echo " hero a ganger" ;
                $this->_score++;
                return true;
            }else{
                $this->bouclier();
                return false ;
            }
         }
         public function bouclier(){
             if ($this->_de->lanceDe()<=2) {
                 echo "le bouclier s'est declancher pas de degat ";
             }else{
                 echo " bouclier casser !!!!!";
                 $this->_pointVie-=10;

             }
         }

    }
?>