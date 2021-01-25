<?php
    class De{
        private $_nombreDeFace = 6;
        private $_couleurDesFaces = "blanc";
        private $_couleurDesChiffres = "noir";

        public function lanceLeDe (){
            echo "le résultat du dé est ".rand(1,$this->_nombreDeFace)."\n";
        }

        public function passerAuDe20 (){
            $this->_nombreDeFace = 20;
        }

        public function deDeNoel (){
            $this->_couleurDesFaces = "rouge";
            $this->_couleurDesChiffres = "blanc";
            $this->_nombreDeFace=$this->_nombreDeFace+1;
            echo "comme c'est noël, il a grossi comme par magie ! \n";
        }

        public function regarderLeDe (){
            echo "c'est un joli dé ".$this->_couleurDesFaces." aux chiffres ".$this->_couleurDesChiffres.". il a ".$this->_nombreDeFace."faces.\n";
        }

        
    }

?>