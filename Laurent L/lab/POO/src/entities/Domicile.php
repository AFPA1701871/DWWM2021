<?php

    class Domicile{
        private $_nombreDePieces = 3;
        private $_chauffage = "electrique";
        private $_surface = 15;


        public function lancerVotreChauffage($date){
            echo "Vous avez lancé votre chauffage le $date.";
        }

        public function aggrandissement($mCarre){
            $this->_surface = $this->_surface + $mCarre;
            echo "\nLa surface est de $this->_surface m2.";
        }




    }


?>