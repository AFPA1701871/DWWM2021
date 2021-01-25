<?php

    class Voiture {
        private $_numeroVoiture =0;
        private $_marqueVoiture;
        private $_modeleVoiture;
        private $_couleurVoiture;
        private $_immatriculationVoiture;    
        private $_vitesseVoiture=0;
        private $_nomVoiture=1;

        //Récupérer le nombre de voiture
        public function __construct($marque ,$modele ,$couleur, $plaque){
            $this ->set_marqueVoiture($marque);            
            $this ->set_modeleVoiture($modele);            
            $this ->set_couleurVoiture($couleur);            
            $this ->set_immatriculationVoiture($plaque);            
        }

        // Les sets
        public function set_marqueVoiture ($marque){
            $this ->_marqueVoiture = $marque;
        }

        public function set_modeleVoiture ($modele){
            $this ->_modeleVoiture = $modele;
        }

        public function set_couleurVoiture ($couleur){
            $this ->_couleurVoiture = $couleur;
        }

        public function set_immatriculationVoiture ($plaque){
            $this ->_immatriculationVoiture = $plaque;
        }

        // Les gets
        public function get_marqueVoiture (){
            return $this ->_marqueVoiture;
        }
        public function get_modeleVoiture (){
            return $this ->_modeleVoiture;
        }
        public function get_couleurVoiture (){
            return $this ->_marqueVoiture;
        }
        public function get_immatriculationVoiture (){
            return $this ->_marqueVoiture;
        }


        public function rouler(Voiture $UneDesVoitures) {// une méthode qui déclenche le début de la course
            $UneDesVoitures ->_vitesseVoiture += $this->_vitesseVoiture;
        }

        public function accelerer(){// une méthode qui augmentera la vitesse des voitures
        }
    }

?>