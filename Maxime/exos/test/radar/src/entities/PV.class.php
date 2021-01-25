<?php
    class PV{
        private $_amende;

        public function setAmount($marque,$modele,$immat,$couleur,$vitesseLim,$vitesseVoit){
            if($vitesseVoit>=$vitesseLim+10){
                $this->_amende=45;
            }
            else if($vitesseVoit>=$vitesseLim+10){
                $this->_amende=90;
            }
            else{
                $this->_amende="";
            }
        }
    }
?>