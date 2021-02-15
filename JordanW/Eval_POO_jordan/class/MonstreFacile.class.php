<?php
     class MonstreFacile {
        protected $_enVie;
        protected $_pointAdversaire;

        public function __construct(){
            $this->_enVie=true;
            $this->_pointAdversaire=1;
        }

        public function set_enVie(bool $bool){
            $this->_enVie=$bool;
        }
        public function get_enVie(){
            return $this->_enVie;
        }

        public function attaque(Joueur $joueur,bool $trace){
            $objDe=new De();
            $intJoueur = $objDe->lanceLeDe();
            $intMonstre = $objDe->lanceLeDe();

            if($trace){ // Trace
                echo "C'est un Monstre ".substr(get_class($this),7)."\n";
                echo "Monstre  attaque : ".$intMonstre. "  ".$joueur->get_nom()." : ".$intJoueur."\n";
            } 
            if($intMonstre>$intJoueur){
                $joueur->subitDegats(10,$trace); // objet lui même tué
            }
        }

        public function get_pointAdversaire(){
            return $this->_pointAdversaire;
        }

    }   
?>