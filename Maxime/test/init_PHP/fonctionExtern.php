<?php

    function nbVoy($phrase){
        $voy=array("a","e","i","o","u","y");
        $nbVoy=0;
        str_split($phrase)
        for($i=1;$i<=count($phrase);$i++){
            for($j=1;$j<=count($voy);$j++){
                if($phrase[$i]==$voy[$j]){
                    $nbVoy=+1;
                }
            }
        }        
        
        return $nbVoy;
        echo "il y a $nbVoy voyelles";
    }

?>