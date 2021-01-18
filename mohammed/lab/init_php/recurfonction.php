<?php
function motinverser($mot,$var){
    $var=0;
    if((strlen($mot)>$var)) {            
      return $var  ;}
    elseif (strlen($mot)==$var) {
        return strrev($mot);
        $var= motinverser($var+1);
        echo $var;    } 
       
    
}
echo motinverser("amine",2);
?>