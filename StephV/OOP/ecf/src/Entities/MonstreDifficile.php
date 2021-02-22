<?php

    class MonstreDifficile extends MonstreFacile{

        public function __construct(bool $facile){
            parent::__construct($facile);
        }

        /**
         * surcharge de l'attaque de la classe mère monstre facile
         * permet d'enchainer avec un sort magique
         */
        public function attaque(Joueur $hero ,int $withTrace){
            if($this->_deDuMonstre->lancerLeDe()>$hero->getDe()->lancerLeDe()){
                $hero->subitDegat(10, $withTrace);
                if($withTrace==1){
                    echo "le monstre difficile a frapper fort\n";
                }
            }
            $this->sortMagique($hero,$withTrace);
        }

        /**
         * methode de sort magique necessitant un objet de type Joueur en arguments
         * lancé de dé qui afflige des dégats supplémentaire si <6
         */
        public function sortMagique(Joueur $hero, int $withTrace){
            $resultatDeSortMagique=$this->_deDuMonstre->lancerLeDe();
            if($resultatDeSortMagique!=6){
                if($withTrace==1){
                    echo "le monstre difficile lance un sort magique\n";
                }
                $hero->subitDegat(5*$resultatDeSortMagique,$withTrace);
            }
        }
    }

?>