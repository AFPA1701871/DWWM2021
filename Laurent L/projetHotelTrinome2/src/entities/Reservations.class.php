<?php

    class Reservation{
        
        // LL Attributs
        private $_nbreAdulte;
        private $_nbreEnfant;
        private $_dateArrivee;
        private $_dateDeDepart;
        private $_vueSouhaitee;
        private $_optionSouhaitee;
        private $_compteur = 0;

        // Contructeur




        // Methodes

        // LL fonction déterminant le nombre de chambre que le client doit reserver 
        // pour répondre aux critéres de nombre d'adultes et d'enfants dans une chambre
        public function nbreChambreAReserver($adulte, $enfant){
            $effectifChambre = ceil(($adulte+$enfant)/4);
            $effectifAdulte = ceil($adulte/2);
            if($effectifChambre>$effectifAdulte && (($adulte/$enfant)>=(1/3))){
                return $effectifChambre;
            } else if ($effectifChambre<$effectifAdulte && (($adulte/$enfant)>=(1/3))){
                return $effectifAdulte;
            }else{
                echo "Les effectifs de votre réservation ne coincident pas avec les capacités d'accueil de notre établissement.\n";
            }

        }


        // LL Getter setter
        public function get_nbreAdulte(){
            return $this->_nbreAdulte;
        }
        public function set_nbreAdulte($_nbreAdulte){
            $this->_nbreAdulte = $_nbreAdulte;
        }
        public function get_nbreEnfant(){
            return $this->_nbreEnfant;
        }
        public function set_nbreEnfant($_nbreEnfant){
            $this->_nbreEnfant = $_nbreEnfant;
        }
        public function get_dateArrivee(){
            return $this->_dateArrivee;
        }
        public function set_dateArrivee($_dateArrivee){
            $this->_dateArrivee = $_dateArrivee;
        }
        public function get_dateDeDepart(){
            return $this->_dateDeDepart;
        }
        public function set_dateDeDepart($_dateDeDepart){
            $this->_dateDeDepart = $_dateDeDepart;
        }
        public function get_vueSouhaitee(){
            return $this->_vueSouhaitee; 
        }
        public function get_optionSouhaitee(){
            return $this->_optionSouhaitee;
        }
        public function set_optionSouhaitee($_optionSouhaitee){
            $this->_optionSouhaitee = $_optionSouhaitee;
        }


        
    }

?>