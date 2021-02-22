<?php
    //Implements iAttaque pour forcer la class a avoir la function attaque.
    class MonstreFacile{
        //attribut de notre class.
        private $_aliveOrDead;
        private $_force;

        //function construct pour set l'attribut a la création.
        public function __construct(){
            $this->_aliveOrDead = 1;
            $this->_force = 10;
        }

        public function get_aliveOrDead(){
            return $this->_aliveOrDead;
        }

        public function set_aliveOrDead(int $aliveOrDead){
            $this->_aliveOrDead = $aliveOrDead;
        }

        public function get_force(){
            return $this->_force;
        }

        public function set_force(int $force){
            $this->_force = $force;
        }

        //function attaquer des monstres et jetté les dé.
        public function attaque(int $jetDuMonstre,int $jetDuHero,object $hero,object $de,$traceOrNotTraceThatsTheQuestion){
            if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                echo "Monstre attaque: ".$jetDuMonstre."  mon héros : ".$jetDuHero."\n";
            }
            if ($jetDuMonstre > $jetDuHero){
                $hero->subitDegats($this,$de,$traceOrNotTraceThatsTheQuestion);
            }
            return $hero;
        }

        public function jetDeDe(object $de){
            $jetDuMonstre=$de->lanceDeDe();
            return $jetDuMonstre;    
        }
        
    }
?>