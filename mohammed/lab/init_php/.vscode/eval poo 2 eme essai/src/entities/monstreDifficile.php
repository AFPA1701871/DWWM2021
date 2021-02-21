<?php
class monstreDifficile extends monstreFacile {
    
         
    public function __construct(){
        parent :: __construct();
    }
        
    public function attaque( $joueur){
        
           $this->sort( $joueur );
        
    }   
        public function sort( $joueur ){
           $jet = $this->_de->lanceDe();
            if ($jet!=6){
                $domage=$jet*5;
                $score=$joueur->getPonitVie()-$domage;
                $joueur->setPonitVie($score);
              echo " le joueur subit :".$joueur->getPonitVie();
                return true;
            }else {
                return false;
                $this->$_NbmonstreAbbatue= $this->$_NbmonstreAbbatue+2;
            }
        }
}
?>