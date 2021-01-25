<?php

    class Radar{

        private $limiteVitesse;

        public function setLimiteVitesse($limite){
            $this->_limiteVitesse = $limite;
        }

        public function getLimiteVitesse(){
            return $this->_limiteVitesse;
        }

        /*public function flash($nomVoiture){
            if (Voiture::getVitesseExt($nomVoiture) > $this->getLimiteVitesse()){
                echo "Trop vite !";
            }
        }*/
        
        
    }

?>