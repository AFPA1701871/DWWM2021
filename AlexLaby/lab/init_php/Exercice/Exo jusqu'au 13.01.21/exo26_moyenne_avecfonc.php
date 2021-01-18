<?php

    $intInputUser=0;
    $note=0;
    $nbNoteSup=0;
    $num2=1;

    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser, $num2)) or $intInputUser>(intdiv($intInputUser, $num2))){
        $intInputUser=readline ("Entrez le nombre de notes que vous souhaitez saisir.");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $note=readline ("Entrez la note n° ". $i);
        while ($note<0 or $note>20){
            $note=readline ("Entrez une note valide");
        }
        $tablo1[$i]=$note;   
    }
    $moyenneClasse= array_sum($tablo1)/count($tablo1);
    for ($j=1;$j<=count($tablo1);$j++){
        if ($tablo1[$j]>$moyenneClasse){
            $nbNoteSup+=1;
        }
    }

    echo "La moyenne de la classe est de : ". $moyenneClasse."\n";
    echo "Les notes au-dessus de la moyenne de classe sont au nombre de : ". $nbNoteSup;

?>
