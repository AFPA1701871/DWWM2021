<?php
    $nombreUser=1;
    $i=1;
    $nombreGrand=0;
    $i2=1;
    while ($nombreUser!== "a"){
        $nombreUser=readline ("Veuillez ecrire les nombres, appuiez sur a pour arrêter.");
        $i++;
        if ($nombreUser!=0){
            if ($i=1){
                $nombreGrand=$nbUser;
                $i2=$i;
            }
        }
        else if ($nombreUser>$nombreGrand){
            $nombreGrand=$nombreUser;
            $i2=$i;
        }
    }
 
    echo "Votre plus gros nombre était" . $intGrand . "il était en position" . $i2;

?>