<?php
    
    $nbDeChamps=4;

    function maxColonne($lignes,$nbDeChamps) {
        $k=-1;
        for ($j=0; $j < $nbDeChamps ; $j++) { 
            for ($i=0; $i < count($lignes) ; $i++) { 
                if ($i==0) {
                    $max=strlen($lignes[$i][$j]);
                }
                elseif (strlen($lignes[$i][$j])>$max) {
                    $max=strlen($lignes[$i][$j]);
                }
            }
            $k+=1;
            $tailleMax[$k]=$max;
        }
        return $tailleMax;
    }
?>