<?php
class MonstreFacile{
    protected $_itIsAlive;//si il est vivant ou non
    protected $_estDifficile; // si il est un monstre difficile ou non

    public function setItIsAlive(bool $itIsAlive){
        $this->_itIsAlive=$itIsAlive;
    }

    public function getItIsAlive(){
        return $this->_itIsAlive;
    }

    public function getEstDifficile(){
        return $this->_estDifficile;
    }

    public function __construct(){
        $this->_itIsAlive=true;//on pourait initialiser ça directement dans la variable, mais c'est mieux de faire ça là
        $this->_estDifficile=false;
    }
    public function attaque(Joueur $joueur,De $de,bool $trace){
        $deMonstre=$de->lanceLeDe();
        $deJoueur=$de->lanceLeDe();
        if($trace){
            echo"Monstre  attaque: ".$deMonstre."  mon héros  : ".$deJoueur."\n";
        }
        if ($deMonstre>$deJoueur){
            if (!$joueur->leveeDeBouclier($de,$trace)){
                $joueur->subitDegats(10,$trace);
            }
        }
    }

}
?>