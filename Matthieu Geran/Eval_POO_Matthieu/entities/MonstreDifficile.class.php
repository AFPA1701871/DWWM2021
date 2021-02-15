<?php

    class MonstreDifficile extends MonstreFacile{

        public function attaque($ennemi,$mode){ //Permet au monstre d'attaquer le joueur
            if ($ennemi->protection($mode) == false){
                $ennemi->subitDegats(10,$mode); //Enlève des PV s'il ne bloque pas l'attaque
            }

            if ($ennemi->estVivant() == false){
                return; //Le monstre ne lance pas de sort si le joueur est déjà mort
            }

            $lanceSort = De::lanceLeDe(); //Lance le sort si le lancé n'est pas égale à 6
            if ($mode == 1){
                echo "[Lancé sort : " . $lanceSort;
            }

            if ($lanceSort == 6){
                if ($mode == 1){
                    echo "] - Sort raté !\n";
                }
            } else {
                if ($mode == 1){
                    echo "] Sort réussi !\n";
                }
            }

            if ($lanceSort < 6 and $ennemi->protection($mode) == false) {
                $ennemi->subitDegats($lanceSort * 5,$mode); //N'enlève pas de dégâts si le joueur bloque
            }
        }

    }

?>