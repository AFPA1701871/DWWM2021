<?php

    class Voiture{

        private $nomVoiture;
        private $marque;
        private $modele;
        private $immatriculation;
        private $couleur;
        private static $vitesse = 0;

        public function __construct($marque,$modele,$immatriculation,$couleur,$i){
            $this->setNom($i);
            $this->setMarque($marque);
            $this->setModele($modele);
            $this->setImmatriculation($immatriculation);
            $this->setCouleur($couleur);
        }

        public function setNom($i){
            $this->_nom = "voiture n°$i";
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
        public function setVitesse(){
            $this->_vitesse = self::$vitesse;
        }

        public function getNom(){
            return $this->_nom;
        }
        public function getVitesse(){
            return $this->_vitesse;
        }

        public function caracteristiquesVoiture(){
            echo "\n$this->_nom\n";
            echo "Marque : $this->_marque\n";
            echo "Modèle : $this->_modele\n";
            echo "Numéros d'immatriculation : $this->_immatriculation\n";
            echo "Couleur : $this->_couleur\n";
        }

        public function demarrage(){
            $this->setVitesse();
        }

        public function acceleration(){
            $acceleration = random_int(1,25);
            $this->_vitesse += $acceleration;
            return $acceleration;
        }
        
        
    }

?>