<?php
$tableau = array(4,8,7,9,1,5,4,6);
foreach ($tableau as $i=>$nombreATester){
    for ($j=$i+1;$j<=count($tableau);$j++){
        if($nombreATester<$tableau[$j]){
            $tableau[$i]=$tableau[$j];
            $tableau[$j]=$nombreATester;
        }
    }
}
foreach ($tableau as $caseAMontrer){
    echo $caseAMontrer;
}
?>