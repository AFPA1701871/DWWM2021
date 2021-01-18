<?php

    $nbNeg=0;
    $nbPos=0;
    $nbO=0;
    $intInputUser=0;
    $num2=1;
    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser, $num2)) or $intInputUser>(intdiv($intInputUser, $num2))){
        $intInputUser=readline ("Entrez le nombre de valeurs que vous souhaitez saisir.");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $tablo[$i]=readline ("Entrez le nombre n° ". $i);
        if ($tablo[$i]>0){
            $nbPos+=1;
        }else if($tablo[$i]<0){
            $nbNeg+=1;
        }else{
            $nbO+=1;
        }
    }
    echo "Nombre de valeurs positives : ". $nbPos."\n";
    echo "Nombre de valeurs negatives : ". $nbNeg."\n";
    echo "Nombre de 0 : ". $nbO;

?>

