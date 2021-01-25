<?php
    require('Voiture.class.php');
    class Pv{
        private $_texte;

        public function __construct($texte){
            $this->setTexte($texte);
        }
        public function setTexte(String $texte){
            $texte = "La voiture de marque $marque, modèle $modele, immatriculation $immatriculation de couleur $couleur vous allez recevoir un pv.";
            $this->_texte=$texte;
        }
        public function getTexte(){
            return $this->_texte;
        }
    }
    


    

?>