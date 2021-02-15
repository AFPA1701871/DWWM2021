<?php
    class MonstreFacile {
        private $_enVie;
        private $_type;

        public function get_enVie(){
            return $this->_enVie;
        }
    
        public function set_enVie($enVie){
            $this->_enVie = $enVie;
        }

        public function get_type(){
            return $this->_type;
        }
    
        public function set_type($type){
            $this->_type = $type;
        }

        public function __construct() {
            $this->set_enVie(true); // on initialise le statut du monstre en "en vie"(true)
            $this->set_type("facile"); // on initialise le niveau du monstre pour pouvoir rendre compte des monstres tués en fonction de leurs types
        }
        
        public function attaque($heros,$mode) {
            $de= new De();
            $resultDeJoueur=$de->lancerLeDe();
            $resultDeMonstre=$de->lancerLeDe();

            if ($mode==1) {
                echo "Monstre attaque: ".$resultDeMonstre."  mon héros: ".$resultDeJoueur."\n";
            }
            
            if ($resultDeMonstre>$resultDeJoueur) {
                $bouclierJoueur=$de->lancerLeDe();
                if ($mode==1) {
                    echo "***              bouclier ".$bouclierJoueur."\n";
                }
                if ($bouclierJoueur>2) {
                    $degatsSubits=10;
                    $heros->subitsDegats($degatsSubits,$mode);
                }
            }
        }
    }
?>