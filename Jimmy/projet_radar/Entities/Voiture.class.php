<?php
    class Voiture {
        private $_marque;
        private $_model;
        private $_immatriculation;
        private $_couleur;

    public function vitesse(){
        $vitesse = rand(1,25);
        return $vitesse;
    }

    public function set_marque($marque){
        $this ->_marque = $marque;
    }
    public function set_model($model){
        $this ->_model = $model;
    }
    public function set_couleur($couleur){
        $this ->_couleur($couleur);
    }

    public function get_marque(){
        return $this->_marque;
    }
    public function get_couleur(){
        return $this->_couleur;
    }
    
    

    }
?>