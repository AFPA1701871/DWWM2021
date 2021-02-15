<?php

    Class De {

        //Attributs
        private $_nombre;

        //Setters et getters
        public function get_nombre(){
            return $this->_nombre;
        }
        public function set_nombre($nombre){
            $this->_nombre = $nombre;
        }

        //Méthodes :

        //Pour lancer le dé
        function lanceLeDe($de){
            $de->set_nombre(rand(1,6));
            return $de;
        }

    }

?>