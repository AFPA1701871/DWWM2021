<?php

    require('./PV.class.php');

    class Radar{
        private $_vitesseMin;

        public function setVitesseMin($vitesseLim){
            $this->_vitesseMin=$vitesseLim;
            echo "le radar flashera les véhicules à partir de $vitesseLim km/h !\n";
        }
    
        public function readSpeed($vitesseLim,$vitesseVoit){
            if($vitesseVoit>$vitesseLim){
                echo "le radar flash la $marque $modele de couleur $couleur immatriculée $registration !\n";
                $newFind=new PV;
                $newFind->setAmende($vitesseLim,$vitesseVoit);
            }
        }
    }
?>