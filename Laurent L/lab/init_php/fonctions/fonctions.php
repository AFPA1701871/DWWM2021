<?php

    function nbreVoyelle ($chaineCar){
        $compteur = 0;
        //creation d'un tableau de caracteres
        for($i=0; $i<strlen($chaineCar) ; $i++){
            $tab[$i] = substr($chaineCar,$i,1);
        }
        //determination via le compteur du nombre de voyelle
        for($i=0 ; $i<count($tab); $i++){
            if($tab[$i]=="a" or $tab[$i]=="e" or $tab[$i]=="i" or $tab[$i]=="o" or $tab[$i]=="u" or $tab[$i]=="y"){
                $compteur++;
            }
        }        
        return $compteur;
    }

    function trouve($chaineCar, $car){
        $k=0;
        $indexRecherche = [];

        for($i=0; $i<strlen($chaineCar); $i++){
            $element = substr($chaineCar,$i,1);
            if ($element==$car){
                $indexRecherche[$k] = $i;
                $k++; 
            }
        }
        return $indexRecherche;
    }

    function purge ($chaineCar, $car){
        $k=0;
        $tabChainePurge = [];
        $indexRecherche = trouve($chaineCar,$car);

        for($i=0;$i<strlen($chaineCar);$i++){
            if($i!=$indexRecherche[$k]){
                $tabChainePurge[$i] = substr($chaineCar,$i,1);
            }else{
                $k++;
            }
        }
        return implode("",$tabChainePurge);
    }

    function purger($aRemplacer,$chaineCar){
        return str_replace(str_split($aRemplacer),"",$chaineCar);
    }
        

?>