<?php

    class Radar{

        //Attribut
        private $_limitation;



        // Constructeur
        public function __construct(int $val){
            $this->set_limitation($val);
        }


        // Méthodes 

        public function flash(string $vehicule,int $val){
            if ($this->_limitation < $val){

            }
        }

        public function affichageVoitureFlashee($vehicule){
            return "\nLa voiture de marque ".$vehicule->get_marque().", de modéle ".$vehicule->get_modele().", de couleur ".$vehicule->get_couleur()." immatriculé ".$vehicule->get_immatriculation." vient d'être flashée."; 
        }

        public function sanction(int $val){
            $différentiel = $val - $this->_limitation;
            if ($différentiel<= 10){
                return "Vous eccopez d'une amende de 45€ et d'un point en moins.";
            }else if ($différentiel<= 20){
                return "Vous eccopez d'une amende de 90€ et de trois points en moins.";
            }else {
                return "Vous etes le gagnant du jour, un tour gratuit à la gendarmerie.";
            }
        }



        public function get_limitation(){
            return $this->_limitation;
        }

        public function set_limitation($_limitation){
            $this->_limitation = $_limitation;
        }

        
    }



?>