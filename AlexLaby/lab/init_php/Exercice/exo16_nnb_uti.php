<?php
    $nbUser=1;
    $i=1;
    $intGrand=0;
    $i2=1;
    while ($nbUser!== "y"){
        $nbUser=readline ("Ecrivez vos nombres, y pour arrêter.");
        $i++;
        if ($nbUser!=0){
            if ($i=1){
                $intGrand=$nbUser;
                $i2=$i;
            }
        }
        else if ($nbUser>$intGrand){
            $intGrand=$nbUser;
            $i2=$i;
        }
    }
 
    echo "Votre plus gros nombre était" . $intGrand . "il était en position" . $i2;

?>
