<?php
class Joueur{
    private $_pointDeVie;//nombre de poin de vie du joueur
    private $_montreFacileVaincu; //nombre de monstre facile vaincu
    private $_montreDifficileVaincu;//nombre de monstre difficile vaincu

    public function getMontreFacileVaincu(){
        return $this->_montreFacileVaincu;
    }
    public function getMontreDifficileVaincu(){
        return $this->_montreDifficileVaincu;
    }

    public function getPointDeVie(){
        return $this->_pointDeVie;
    }

    public function __construct(){
    $this->_pointDeVie=50;//on pourait initialiser ça directement dans la variable, mais c'est mieux de faire ça là
    $this->_montreFacileVaincu=0;
    $this->_montreDifficileVaincu=0;
    }

    public function estVivant(){//répond à la question: le hero est-t-il toujours vivant ?
        if($this->_pointDeVie>0){
            return true;//vrai si pv positif
        }
        return false;//faux si à 0 pv ou moins
    }

    public function attaque(MonstreFacile $monstre,De $de,bool $trace){//un montre difficile est un monstre facile par herritage
        $deJoueur=$de->lanceLeDe();
        $deMonstre=$de->lanceLeDe();
        if($trace){
            echo"MonHeros attaque: ".$deJoueur."  Le monstre : ".$deMonstre."\n";
        }
        if($deJoueur>=$deMonstre){//instakill !
            $monstre->setItIsAlive(false);
            if ($monstre->getEstDifficile()){
                $this->_montreDifficileVaincu++;
            }else{
                $this->_montreFacileVaincu++;
            }
            if($trace){
                echo"***              héros gagne\n";
            }
        }
    }

    public function leveeDeBouclier(De $de,bool $trace){//pour les parades
        $deDeBouclier=$de->lanceLeDe();
        if($trace){
            echo"***              bouclier ".$deDeBouclier."\n";
        }
        if($deDeBouclier<3){// 2 chances sur 6
            if($trace){
                echo"***              Les dégats sont parés\n";
            }
            return true;
        }
        return false;
    }

    public function subitDegats(int $degats, bool $trace){//pour faire souffrire les héros
        $this->_pointDeVie-=$degats;
        if($trace){
            echo"***              héros subit des dégats ".$degats."   reste : ".$this->getPointDeVie()."\n";
        }
    }
}

?>