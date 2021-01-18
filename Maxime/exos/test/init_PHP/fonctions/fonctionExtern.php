<?php

    //compter le nombre de voyelles
    function nbVoy($phrase){
        $voy=array("a","e","i","o","u","y");
        $phrase=str_split($phrase);
        $nbVoy=0;
        
        for($i=0;$i<count($phrase);$i++){
            for($j=0;$j<count($voy);$j++){
                if($phrase[$i]==$voy[$j]){
                    $nbVoy++;
                }
            }
        }        
    return $nbVoy;
    }



    //purge d'un caractère
    function purge($phrase,$purge){
        $resultat=str_replace($purge,"",$phrase);

        return $resultat;
    }

    //purge de plusieurs caractères
    function purgeMulti($phrase,$purge){
        $tabPhr=str_split($phrase);
        $tabPur=str_split($purge);
        for($i=0;$i<count($tabPhr);$i++){
            for($j=0;$j<count($tabPur);$j++){
                if($tabPhr[$i]==$tabPur[$j]){
                    $tabPhr[$i]="";
                }
            }
        }

        $resultat=implode($tabPhr);
        return $resultat;
    }


?>