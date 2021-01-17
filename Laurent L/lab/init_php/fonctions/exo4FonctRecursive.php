<?php

    $mot = "hello";
    // $lettre = substr($mot,4,1);
    $lettre = substr($mot,(strlen($mot)-1),1);
    echo $lettre;

    function inverse($mot){
        if(strlen($mot)==1){
            substr($mot,1,1);
        } else {
            return substr($mot,strlen($mot)-1,1).inverse($mot);
        }
        
    }
    echo inverse($mot);

    function inverse($mot){
        if(strlen($mot)==1){
            return $mot;
        } else {
            return inverse(substr($mot,strlen($mot)-1,1)).inverse($mot);
        }
        
    }
    echo inverse($mot);



?>