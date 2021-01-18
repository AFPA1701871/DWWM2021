<?php

function rev($string){
    if(strlen($string)==1){
        return $string;
    }
    else{       
        return rev(substr($string,1,(strlen($string)-1))).substr($string,0,1);
        /**/
    }
}
    $strsaisie=readline("saisir un mot: ");
    echo rev($strsaisie);

?>
