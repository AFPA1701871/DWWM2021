<?php

    class Dessert{
        private static $tempsCuisson=20;
        private $temperature;
    
        /*
        public function Cuisson($tempsCuisson,$temperature){
            $this->_tempsCuisson = $tempsCuisson;
            $this->_temperature = $temperature;
            return "Mettre au four pendant " . $this->_tempsCuisson . " minutes à ". $this->_temperature . " degrés.";
        }
        */

        public function getTempsCuisson(){
            return $this->_tempsCuisson;
        }
        public function Preparation($personnes){
            $this->_personnes = $personnes;
            $beurre = 20 * $personnes;
            return "Pour $this->_personnes personnes, il faut $beurre grammes de beurre. ".self::$tempsCuisson . " minutes de cuisson.";
        }

    }

?>