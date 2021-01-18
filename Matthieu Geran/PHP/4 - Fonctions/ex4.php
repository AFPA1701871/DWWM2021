<?php

    $mot = readline("Tapez un mot : ");

    function fonctionInverser($mot){

        if (strlen($mot)==1){

            return $mot;

        } else {
            
            return fonctionInverser(substr($mot,1,(strlen($mot)-1))).substr($mot,0,1);

        }
        
    }

    echo fonctionInverser($mot);
?>