<?php
class manchot {
  private  $_nom;
 
    public function __construct(){
        $this->_nom="manchot";
    }

    public function tirage(){
        echo "1->pile\n"
             ."2->face\n";
    do {        
          $pileOuFace=readline("saisire votre choix :");
       } while ($pileOuFace>2); 
        $tirage = rand(1,2);
        echo " le bandit manchot a jouer $tirage \n";
        if ($tirage==$pileOuFace){
            $bol=1;
            sleep(2);
            $point=rand(1,10);
            echo " vous avez ganer $point point \n";
        }
        else {
            $bol=2;
            sleep(2);
            $point=rand(1,10);
            echo " vous avez perdu $point point \n";
        }
        $tabresult=array($point,$bol);
        return $tabresult;
    }
        //getters
            public function get_nom(){
            return $this->_nom;
        }
}
?>