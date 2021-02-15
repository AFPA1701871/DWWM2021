<?php
    //Implements iAttaque pour forcer la class a avoir la function attaque.
    class Joueur{
        //attribut de notre class.
        private $_PointDeVie;
        private $_countMonstreFacile;
        private $_countMonstreDifficile;

        //function construct pour initialiser les point de vie quand on crée le hero.
        public function __construct(int $pdv){
            $this->set_PointDeVie($pdv);
            $this->set_countMonstreFacile(0);
            $this->set_countMonstreDifficile(0);
        }

        //setteur / getteur afin de récup / changer notre valeur attribut.
        public function get_PointDeVie(){
            return $this->_PointDeVie; 
        }

        public function set_PointDeVie(int $pdv){
            $this->_PointDeVie = $pdv;
        }

        public function get_countMonstreFacile(){
            return $this->_countMonstreFacile; 
        }

        public function set_countMonstreFacile(int $count){
            $this->_countMonstreFacile = $count;
        }

        public function get_countMonstreDifficile(){
            return $this->_countMonstreDifficile; 
        }

        public function set_countMonstreDifficile(int $count){
            $this->_countMonstreDifficile = $count;
        }

        //function du hero, il peut attaquer, jetter les dé, voir si il est encore en vie ou subire des dégats.
        public function attaque(int $jetDuHero,int $jetDuMonstre,object $monstre,$traceOrNotTraceThatsTheQuestion){
            if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                echo "MonHeros attaque: ".$jetDuHero."  le Monstre : ".$jetDuMonstre."\n";
            }
            if ($jetDuHero >= $jetDuMonstre){
                $monstre->set_aliveOrDead(2);
                if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                    echo "***              héros gagne\n";
                }
            }
            return $monstre;
        }

        public function jetDeDe(object $de){
            $jetDuHero=$de->lanceDeDe($de);
            return $jetDuHero;  
        }

        public function estVivant(){

        }

        public function subitDegats(object $monstre,object $de,$traceOrNotTraceThatsTheQuestion){
            $jetBouclier=$this->jetDeDe($de);
            if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                echo "***              bouclier ".$jetBouclier."\n";
            }
            if ($jetBouclier > 2){
                $this->set_PointDeVie(($this->get_PointDeVie()-$monstre->get_force()));
                if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                    echo "***              héros subit des dégats ".$monstre->get_force()."  reste : ".$this->get_PointDeVie()."\n";
                }
            }
            return $this;
        }
    }
?>