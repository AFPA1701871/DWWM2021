<?php
for ($i=1; $i <= 8 ; $i++) { 
   $ligne ="\n";
   for ($j=1; $j <= $i; $j++) { 
       if (($j==1) || ($j==$i)) {
           $ligne = $ligne. "x";
       }elseif($i != 8){
           $ligne = $ligne. "o";
       }else {
           $ligne = $ligne. "x";
       }
   }
   echo $ligne;
}
?>