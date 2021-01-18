<?php

    function retourne($mot){
        if(strlen($mot)==0){    //strlen compte la taille d'une chaine
            return $mot;
        }
        else{
            return retourne(substr($mot,1,(strlen($mot)-1))).substr($mot,0,1);      //substr retourne une chaine
        }

    }

    $mot=readline("entrer un mot à retourner : ");
    echo "mot retourner : ".retourne($mot);

?>