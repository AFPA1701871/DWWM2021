<?php

    $nbUser=1;
    $i=0;
    $intGrand=0;
    $i2=0;
    while ($nbUser!== "y"){
        $i++;
        $nbUser=readline ("Ecrivez le nombre numéro " . $i . ", y pour arrêter.");
        if ($nbUser!=="y"){
            if ($i==1){
                $intGrand=$nbUser;
                $i2=$i;
            }else if ($nbUser>$intGrand){
                $intGrand=$nbUser;
                $i2=$i;
            }
        }
    }
 
    echo "Votre plus gros nombre était " . $intGrand . " il était en position " . $i2;

?>
