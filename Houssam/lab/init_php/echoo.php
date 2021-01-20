<?php

    function voyelles()
    {
        $resultat="";
        for ($i=0;$i<= count($txt);$i++){
            $controle=1;
                for ($j=1;$j <= count(lettre);$j++){
                    if (strpos ($txt,$lettre) ){
                        $controle=0;
                    }
                }
            if ($controle=1){
                $resultat=+strpos($txt);
            }
        }
        return $resultat;
    }

?>