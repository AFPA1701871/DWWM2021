<?php

    class MonstreDifficile extends MonstreFacile{

        public function attaque($ennemi){
            if ($ennemi->protection() == false){
                $ennemi->subitDegats(10);
            }

            if ($ennemi->estVivant() == false){
                return;
            }

            $lanceSort = De::lanceLeDe();
            echo "[Lancé sort : " . $lanceSort;

            if ($lanceSort == 6){
                echo "] - Sort raté !\n";
            } else {
                echo "] Sort réussi !\n";
            }

            if ($lanceSort < 6 and $ennemi->protection() == false) {
                $ennemi->subitDegats($lanceSort * 5);
            }
        }

    }

?>