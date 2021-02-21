<?php

class MonstreFacile{

    protected $_estVivant;
    protected $_deDuMonstre;
    protected $_isMonsterFacile;

    public function __construct(bool $facile){
        $this->_estVivant=true;
        $this->_deDuMonstre=new De();
        $this->setIsMonsterFacile($facile);
    }

    public function setIsMonsterFacile(bool $facile){
        $this->_isMonsterFacile=$facile;
    }

    public function getIsMonsterFacile(){
        return $this->_isMonsterFacile;
    }

    public function getEstVivant(){
        return $this->_estVivant;
    }

    public function setEstVivant(bool $isAlive){
        $this->_estVivant=$isAlive;
    }

    public function getDe(){
        return $this->_deDuMonstre;
    }

    /**
     * methode d'attaque du monstre basé sur un lancé de dé des 2 protagonistes
     * besoin d'un objet de type joueur en argument
     */
    public function attaque(Joueur $hero, int $withTrace){
        if($this->_deDuMonstre->lancerLeDe()>$hero->getDe()->lancerLeDe()){
            if($withTrace==1){
                echo "le monstre a frapper fort\n";
            }
            $hero->subitDegat(10,$withTrace);
        }
    }

}

?>