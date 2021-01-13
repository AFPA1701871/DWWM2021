<?php

    $intInputUser=0;
    $num2=1;
    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser, $num2)) or $intInputUser>(intdiv($intInputUser, $num2))){
        $intInputUser=readline ("Entrez le nombre de valeurs que vous souhaitez saisir.");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $tablo[$i]=readline ("Entrez le nombre n° ". $i); 
    }
    $plusGrand=$tablo[1];
    $position=1;
    if($intInputUser!=1){
        for ($i=2; $i<=$intInputUser; $i++){
            if ($tablo[$i]>$plusGrand){
                $plusGrand=$tablo[$i];
                $position=$i;
            }
        }
    }
    echo "Valeur la plus grande " .$plusGrand ." en position ".$position;

?>
