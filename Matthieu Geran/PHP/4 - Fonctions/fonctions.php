<?php

    function fonctionVoyelles($phrase){ //ex 1 - Compter le nombre de voyelles d'une phrase

        $phrase = strtolower($phrase);
        $phrase = str_split($phrase);
        $compteur = 0;

        for ($i=0;$i<=count($phrase)-1;$i++){

            if ($phrase[$i] == "a" or $phrase[$i] == "e" or $phrase[$i] == "i" or $phrase[$i] == "o" or $phrase[$i] == "u" or $phrase[$i] == "y"){
                $compteur++;
            }

        }

        return $compteur;

    }

    function fonctionPurge($phrase,$valeurPurge){ //ex2 - Enlever une lettre d'une phrase

        $phrase = strtolower($phrase);
        $phrase = str_split($phrase);
        $valeurPurge = strtolower($valeurPurge);

        for ($i=0;$i<=count($phrase)-1;$i++){

            if ($phrase[$i] == $valeurPurge){
                $phrase[$i]="";
            }
        }
       
        $phrase = implode($phrase);
        $phrase = ucfirst($phrase);

        return $phrase;

    }

    function fonctionPurge2($phrase,$valeursPurge){ //ex3 - Enlever plusieurs lettres d'une phrase

        $phrase = strtolower($phrase); //On met tout en minuscules pour éviter les soucis avec les majuscules
        $phrase = str_split($phrase); //On transforme la chaîne de caractères en tableau, avec chaque lettres dans différentes cellules
        $valeursPurge = strtolower($valeursPurge);
        $valeursPurge = str_split($valeursPurge);

        for ($i=0;$i<count($phrase);$i++){

            for ($j=0;$j<count($valeursPurge);$j++){

                if ($phrase[$i]==$valeursPurge[$j]){
                    $phrase[$i]="";
                }

            }

            
        }
       
        $phrase = implode($phrase); //On assemble le tableau pour en faire à nouveau une chaîne de caractères
        $phrase = ucfirst($phrase); //Majuscules en début de phrase pour faire joli

        return $phrase;

    }

?>