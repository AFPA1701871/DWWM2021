<?php

    class Voiture{

        private $marque;
        private $modele;
        private $immatriculation;
        private $couleur;
        private static $vitesse = 0;

        public function __construct($marque,$modele,$immatriculation,$couleur){
            $this->setMarque($marque);
            $this->setModele($modele);
            $this->setImmatriculation($immatriculation);
            $this->setCouleur($couleur);
            self::$vitesse;
        }

        public function setMarque($marque){
            $this->_marque = $marque;
        }
        public function setModele($modele){
            $this->_modele = $modele;
        }
        public function setImmatriculation($immatriculation){
            $this->_immatriculation = $immatriculation;
        }
        public function setCouleur($couleur){
            $this->_couleur = $couleur;
        }

        public function caracteristiquesVoiture(){
            echo "\nMarque : $this->_marque\n";
            echo "Modèle : $this->_modele\n";
            echo "Numéros d'immatriculation : $this->_immatriculation\n";
            echo "Couleur : $this->_couleur\n";
            echo "Vitesse actuelle : ".self::$vitesse;
        }

        public function acceleration($immatriculation,$vitesse){

        }
        
        
    }

?>