<?php
     class MonstreDifficile extends MonstreFacile{

        public function __construct(){
            parent::__construct();
            $this->_pointAdversaire=2;
        }
        
        public function attaque(Joueur $joueur,bool $trace){
            parent::attaque($joueur,$trace);
            $this->sortMagique($joueur,$trace); // Surcharge
        }

        public function sortMagique(Joueur $joueur,bool $trace){
            $objDe = new De();
            $intDe = $objDe->LanceLeDe();
            if($trace){echo "***              sort magique $intDe \n";} // trace
            if($intDe !=6){ // Inflige des dégats
                $joueur->subitDegats($intDe*5,$trace);
            }else{
                $joueur->subitDegats($intDe*0,$trace);
            }
        }

    }
?>