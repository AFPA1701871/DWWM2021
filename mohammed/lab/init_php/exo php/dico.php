<?php
$tab= array ("amine","bilal","sara","selma");
$mot=readline(" entrez mot  ");
$ok=0;
      for ($i=0; $i <count($tab) ; $i++) { 
              if ($mot==$tab [$i]) {
                  echo " mot existe ";
                   $ok=$i  ;    
                }        
        }
    if ($ok==0) {
       echo " le mot n' existe pas";
    }
  
?>