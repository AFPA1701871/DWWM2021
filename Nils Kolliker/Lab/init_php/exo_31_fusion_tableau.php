<?php
$tableau1 = array(2,3,4,6,9,11,12,16,21,22);
$tableau2 = array(1,3,5,7,8,10,15,16);
$indiceT1=0;
$indiceT2=0;
foreach ($tableau1 as $caseAMontrer){
    echo $caseAMontrer." ";
}
echo"\n";
foreach ($tableau2 as $caseAMontrer){
    echo $caseAMontrer." ";
}
echo"\n";

for ($i = 0; $i<count($tableau1)+count($tableau2); $i++){
    if($indiceT1>=count($tableau1)){
        $fusionTableau[i]=$tableau2[$indiceT2];
        $indiceT2++;
    }else if($indiceT2>=count($tableau2)){
        $fusionTableau[$i]=$tableau1[$indiceT1];
        $indiceT1++;
    }else if ($tableau1[$indiceT1]<$tableau2[$indiceT2]){
        $fusionTableau[$i]=$tableau1[$indiceT1];
        $indiceT1++;
    }else{
        $fusionTableau[$i]=$tableau2[$indiceT2];
        $indiceT2++;
    }
}
foreach ($fusionTableau as $caseAMontrer){
    echo $caseAMontrer." ";
}
?>