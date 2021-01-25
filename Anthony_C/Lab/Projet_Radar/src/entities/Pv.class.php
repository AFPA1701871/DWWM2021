<?php
    class Pv{
        private const SMALL_PV = "1 pts en moins & 45€ d'amende.";
        private const MEDIUM_PV = "3pts en moins & 90€ d'amende.";
        private const BIG_PROBLEM = "RDV à la gendarmerie...";

        public function createPV($typePv,$i){
            if ($typePv==0){
                echo "La Voiture $i a était flashée.\n".self::SMALL_PV;
                exit;
            }else if ($typePv==1){
                echo "La Voiture $i a était flashée.\n".self::MEDIUM_PV;
                exit;
            }else{
                echo "La Voiture $i a était flashée.\n".self::BIG_PROBLEM;
                exit;
            }
        }
    }
?>