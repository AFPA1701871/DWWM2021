<?php
    class Joueur {
        private $_pointsVie;
        private $_score;
        private $_nbFacileKilled; // nombre de Monstres Faciles tués par le joueur
        private $_nbDifficileKilled; // nombre de Monstres Difficiles tués par le joueur

        public function get_pointsVie(){
            return $this->_pointsVie;
        }
    
        public function set_pointsVie($pointsVie){
            $this->_pointsVie = $pointsVie;
        }

        public function get_score(){
            return $this->_score;
        }
    
        public function set_score($score){
            $this->_score = $score;
        }

        public function get_nbFacileKilled(){
            return $this->_nbFacileKilled;
        }
    
        public function set_nbFacileKilled($nbFacileKilled){
            $this->_nbFacileKilled = $nbFacileKilled;
        }
    
        public function get_nbDifficileKilled(){
            return $this->_nbDifficileKilled;
        }
    
        public function set_nbDifficileKilled($nbDifficileKilled){
            $this->_nbDifficileKilled = $nbDifficileKilled;
        }

        public function __construct() {
            $this->set_pointsVie(50); // initialisation du nombre de points de vie du joueur à 50
            $this->set_score(0); // initialisation du score du joueur à 0
            $this->set_nbFacileKilled(0); // initialisation du nombre de Monstres Faciles tués par le joueur à 0
            $this->set_nbDifficileKilled(0); // initialisation du nombre de Monstres Difficiles tués par le joueur à 0
        }

        public function estVivant() {
            if ($this->_pointsVie>0) {
                return true;
            }
            else {
                return false;
            }
        }

        public function attaque($monstre,$mode) {
            $de= new De();
            $resultDeJoueur=$de->lancerLeDe();
            $resultDeMonstre=$de->lancerLeDe();
            if ($mode==1) {
                echo "MonHeros attaque: ".$resultDeJoueur."  le Monstre : ".$resultDeMonstre."\n";
            }
            if ($resultDeJoueur>=$resultDeMonstre) {
                if ($mode==1) {
                    echo "***              héros gagne\n";
                }
                    $monstre->set_enVie(false);
                    if ($monstre->get_type()=="facile") {
                        $this->_score=$this->_score+1;
                        $this->_nbFacileKilled=$this->_nbFacileKilled+1;
                    }
                    elseif ($monstre->get_type()=="difficile") {
                        $this->_score=$this->_score+2;
                        $this->_nbDifficileKilled=$this->_nbDifficileKilled+1;
                    }
            }
        }

        public function subitsDegats($degatsSubits,$mode) {
            $this->_pointsVie=$this->_pointsVie-$degatsSubits;
            if ($mode==1) {
                echo "***              héros subit des dégats ".$degatsSubits."   reste : ".$this->_pointsVie."\n";
            }
        }
    }
?>