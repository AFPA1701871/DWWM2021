<?php
    class MonstreDifficile extends MonstreFacile {

        public function __construct() {
            Parent::__construct(); // reprise de l'initialisation du statut du monstre en "en vie"(true) contenue dans la classe mère
            $this->set_type("difficile"); // on initialise le niveau du monstre pour pouvoir rendre compte des monstres tués en fonction de leurs types
        }

        public function attaque($heros,$mode) {
            if ($mode==1) {
                echo "C'est un Monstre Difficile\n";
            }

            $de= new De();
            $resultDeJoueur=$de->lancerLeDe();
            $resultDeMonstre=$de->lancerLeDe();

            if ($mode==1) {
                echo "Monstre attaque: ".$resultDeMonstre."  mon héros: ".$resultDeJoueur."\n";
            }
                
            if ($resultDeMonstre>$resultDeJoueur) {
                $bouclierJoueur=$de->lancerLeDe();
                if ($mode==1) {
                    echo "***              bouclier ".$bouclierJoueur."\n";
                }
                if ($bouclierJoueur>2) {
                    $degatsSubits=10;
                    $heros->subitsDegats($degatsSubits,$mode);
                }
            }

            $this->sortMagique($heros,$mode);
        }

        public function sortMagique($heros,$mode) {
            $de= new De();
            $resultSortMagique=$de->lancerLeDe();
            if ($mode==1) {
                echo "***              sort magique ".$resultSortMagique."\n";
            }

            if ($resultSortMagique!=6) {
                $bouclierJoueur=$de->lancerLeDe();
                if ($mode==1) {
                    echo "***              bouclier ".$bouclierJoueur."\n";
                }
                if ($bouclierJoueur>2) {
                    $degatsSubits=$resultSortMagique*5;
                    $heros->subitsDegats($degatsSubits,$mode);
                }
            }
        }
    }
?>