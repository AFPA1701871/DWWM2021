<?php

$age=readline ("entrez votre age ");
$sexe=readline (" entrez votre sexe  m pour masculin et f pour feminin ");
      if (($age>=18) and ($age<20))  {   // switch dans if tres utile
            switch ($sexe) {
             case "m" :
             echo " pas imposable";          
             break;
             case "f":
             echo "imposable";
           }
        }
            else if (($age>=20) and ($age<=35) ){
               echo " imposable";
            }
             else if  ($age>35) {
                  switch ($sexe) {
                     case "m":
                     echo " imposable";
                     break;
                     case "f":
                     echo " pas imposable";
                      break;           
                   }
                }
 else {
    echo "pas imposable";
    }
?>

