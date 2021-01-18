<?php
    
    function inverse($mot) {
        if (strlen($mot)==1) {
            return $mot;
        }
        else {
            
            echo substr($mot,1,strlen($mot))."\n";
            return inverse(substr($mot,1,strlen($mot))).substr($mot,0,1);
        }
    }

    $monMot="Hello";

    echo inverse($monMot);
?>