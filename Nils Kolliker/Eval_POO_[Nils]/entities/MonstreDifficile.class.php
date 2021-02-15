<?php
class MonstreDifficile extends MonstreFacile{

    public function __construct(){
        Parent::__construct();
        $this->_estDifficile=true;
    }

    public function attaque(Joueur $joueur,De $de,bool $trace){
        $deMonstre=$de->lanceLeDe();
        $deJoueur=$de->lanceLeDe();
        if($trace){
            echo"C'est un  Monstre Difficile\nMonstre  attaque: ".$deMonstre."  mon héros  : ".$deJoueur."\n";//sans cette ligne, j'aurais appelé la méthode parent dans l'attaque enfant
        }
        if ($deMonstre>$deJoueur){
            if (!$joueur->leveeDeBouclier($de,$trace)){
                $joueur->subitDegats(10,$trace);
            }
        }
        $this->rayonMagique($joueur,$de,$trace);
    }
    public function rayonMagique(Joueur $joueur,De $de, bool $trace){
        $deDeMana=$de->lanceLeDe();
        if($trace){
            echo"***              sort magique ".$deDeMana."\n";
        }
        if(!$joueur->leveeDeBouclier($de,$trace)){
            if($deDeMana==6){//une chance sur 6
                $joueur->subitDegats(0,$trace);//juste pour l'affichage si la trace est demandé
            }else{
                $joueur->subitDegats(5*$deDeMana,$trace);//ça pique en vrai... 12.5 de dégats en moyenne
            }
        }

    }
}

?>