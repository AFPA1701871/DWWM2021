<?php

    class Radar{

        //Attribut
        private $_limitation;



        // Constructeur
        public function __construct(int $val){
            $this->set_limitation($val);
        }


        // Méthodes 

        public function affichageVoitureFlashee($vehicule,$vitesse){
            return "\n\nLa voiture immatriculée ".$vehicule->get_immatriculation()." vient d'être flashée à ".$vitesse." km/h.\nLes caractéristiques du véhicule sont : \nMarque : ".$vehicule->get_marque().",\nModéle : ".$vehicule->get_modele().",\nCouleur : ".$vehicule->get_couleur().".";
        }

        public function sanction(int $val){
            $différentiel = $val - $this->_limitation;
            if ($différentiel<= 10){
                return "\n\nVous ecopez d'une amende de 45€ et d'un point en moins.";
            }else if ($différentiel<= 20){
                return "\n\nVous ecopez d'une amende de 90€ et de trois points en moins.";
            }else {
                return "\n\nVous etes le gagnant du jour, un tour gratuit à la gendarmerie.";
            }
        }

            //getter setter

        public function get_limitation(){
            return $this->_limitation;
        }

        public function set_limitation(int $_limitation){
            $this->_limitation = $_limitation;
        }

        
    }



?>