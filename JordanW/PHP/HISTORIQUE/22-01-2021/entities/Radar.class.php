<?php 

    class Radar{
        private $_limitation;

        public function __construct(int $limitation){
            $this-> setLimitation($limitation);
        }
        
        private function setLimitation(int $limitation){
            $this-> _limitation=$limitation;
        }

        public function getLimitation(){
            return $this-> _limitation;
        }

        public function controleVitesse(int $vitesse){
            if($vitesse > $this-> _limitation){
                return true;
            }
            return false;
        }
        
    }

?>
