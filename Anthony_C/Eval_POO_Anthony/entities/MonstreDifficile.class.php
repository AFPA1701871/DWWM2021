<?php
    //Extends de MonstreFacile, cette class est la fille de la classe MonstreFacile.
    class MonstreDifficile extends MonstreFacile{
        private $_magie;

        public function __construct(){
            //parent permet de faire le construct de la class mère qui est lié a cette class.
            parent::__construct();
            $this->_magie = 5;
        }

        //getteur/setteur qui initialise ou récupère les attributs.
        public function get_magie(){
            return $this->_magie;
        }

        public function set_magie(int $magie){
            $this->_magie = $magie;
        }

        //function attaquer qui surcharge la function attaque de la class mère et un autre fonction qui est la magie.
        public function attaque(int $jetDuMonstre,int $jetDuHero,object $hero,object $de,$traceOrNotTraceThatsTheQuestion){
            if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                echo "Monstre attaque: ".$jetDuMonstre."  mon héros : ".$jetDuHero."\n";
            }
            if ($jetDuMonstre > $jetDuHero){
                $hero->subitDegats($this,$de,$traceOrNotTraceThatsTheQuestion);
            }
            return $hero;
        }

        public function magie(object $hero,object $de,$traceOrNotTraceThatsTheQuestion){
            $this->set_force($this->jetDeDe($de));
            if(strtolower($traceOrNotTraceThatsTheQuestion)=="o"){
                echo "***              sort magique ".$this->get_force()."\n";
            }
            $hero->subitDegats($this,$de,$traceOrNotTraceThatsTheQuestion);
            $this->set_force(10);
            return $hero;
        }
    }
?>