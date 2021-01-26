<?php
class Radar{
    private $_vitesseLimite;
    public function __construct(int $vitesseLimite){
        $this->setVitesseLimite($vitesseLimite);
    }
    private function setVitesseLimite(int $vitesse){
        $this ->_vitesseLimite=$vitesse;
    }
    public function controleVitesse (Voiture $voiture){
        if($this->_vitesseLimite<$voiture->getVitesse()){
            $this-> flash($voiture);
            exit;
        }
    }
    private function flash(Voiture $voiture){
        echo "la voiture flashé est une ".$voiture->getMarque().", modèle ".$voiture->getModele().", de couleur ".$voiture->getCouleur().", immatriculée ".$voiture->getImmatriculation().".\nelle a été flashé à ".$voiture->getVitesse()."km/h\n";
        if($this->_vitesseLimite+10>$voiture->getVitesse()){
            echo"1pts en moins et 45€ d’amende.";
        }elseif($this->_vitesseLimite+20>$voiture->getVitesse()){
            echo"3pts en moins et 90€ d’amende.";
        }else{
            echo"RDV à la gendarmerie.";
        }
    }
}
?>