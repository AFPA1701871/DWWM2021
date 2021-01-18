<?php
$tableau = array("b","d","f","h","j");
foreach ($tableau as $caseAMontrer){
    echo $caseAMontrer." ";
}
echo "\n";
$mot=readline("quel mot cherchez vous ? ");

if (count($tableau)>=2){
    while (count($tableau)>1){
        $demiTableau=intdiv(count($tableau),2);
        if ($tableau[$demiTableau]==$mot){
            $tableau=array($tableau[$demiTableau]);
        }else{
            unset($temp);
            if($tableau[$demiTableau] > $mot){
                for($i=0;$i<$demiTableau;$i++){
                    $temp[$i]=$tableau[$i];
                }
            }else{
                for($i=$demiTableau;$i<count($tableau);$i++){
                    $temp[$i-$demiTableau]=$tableau[$i];         //!\\ $temp n'est pas numéroté de 0 à i-1 mais a en clé le n'°de case des valeurs de $tableau
                }
            }
            unset($tableau);
            foreach ($temp as $caseATransferer){                 //!\\ du coup faire $tableau=$temp ne marche pas !
                $tableau[]=$caseATransferer;
            }
        }
    }
}
if ($tableau[0]==$mot){
    echo "le mot est dans le dictionaire";
}else{
    echo "le mot n'est pas dans le dictionaire";
}
?>