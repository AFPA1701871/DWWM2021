<?php

    $intInputUser=0;
    $num2=1;
    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser, $num2)) or $intInputUser>(intdiv($intInputUser, $num2))){
        $intInputUser=readline ("Entrez le nombre de valeurs que vous souhaitez saisir.");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $tablo[$i]=readline ("Entrez le nombre n° ". $i);
        $tablo[$i]+=1; 
    }
    foreach ($tablo as $element) {
        echo $element."\n";
    }

?>