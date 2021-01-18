<?php
    //convertir une valeur de la table au format "| valeur" 
    function tablage($chaine,$tailleChamp) {
        $line="|";
        for ($i=0; $i < $tailleChamp+3; $i++) { 
            if ($i==0 or $i==$tailleChamp+1) {
                $line.=" ";
            }
            elseif ($i==1) {
                $line.="$chaine";
            }
            elseif ($i==2 and strlen($chaine)<$tailleChamp) {
                for ($j=0; $j < ($tailleChamp-strlen($chaine)) ; $j++) { 
                    $line.=" ";
                }
            }
        }
        return $line;
    }

    
?>