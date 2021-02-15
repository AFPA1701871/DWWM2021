<?php
    class PV{
        private $_amende;

        public function setAmende($difVit){
            if($difVit<=10){
                $_amende="-1pt et 45€ d'amende";
            }
            else if($difVit<=10 and $difVit<20){
                $_amende="-3pt et 90€ d'amende";
            }
            else{
                $_amende="RDV gendarmeire";
            }
            echo $_amende;
        }
    }
?>