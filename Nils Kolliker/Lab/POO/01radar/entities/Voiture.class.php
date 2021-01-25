<?php
class Voiture{
    private $_marque;
    private $_modele;
    private $_immatriculation;
    private $_couleur;
    private $_vitesse = 0;

    public function __construct(string $marque, string $modele, string $immatriculation, string $couleur){
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setImmatriculation($immatriculation);
        $this->setCouleur($couleur);
    }
    private function setMarque(string $marque){
        $this ->_marque=$marque;
    }
    private function setModele(string $modele){
        $this ->_modele=$modele;
    }
    private function setImmatriculation(string $immatriculation){
        $this ->_immatriculation=$immatriculation;
    }
    private function setCouleur(string $couleur){
        $this ->_couleur=$couleur;
    }
    public function accelerer(){
        $rand=random_int(1,25);
        $this ->_vitesse = $this ->_vitesse + $rand;
        echo "la voiture ".$this->_marque.", modèle ".$this->_modele.", de couleur ".$this->_couleur.", immatriculée ".$this->_immatriculation." vient d’accélérer de ".$rand."km/h et roule maintenant à ".$this ->_vitesse."km/h\n";
    }
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getImmatriculation(){
        return $this->_immatriculation;
    }
    public function getCouleur(){
        return $this->_couleur;
    }
    public function getVitesse(){
        return $this->_vitesse;
    }
}
?>