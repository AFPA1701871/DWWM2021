<?php
$tableau = array(4,8,7,9,1,5,4,6);
for ($i=0;$i<count($tableau)-1;$i++){
    for ($j=$i+1;$j<count($tableau);$j++){
        if($tableau[$i]<$tableau[$j]){
            $temp=$tableau[$i];
            $tableau[$i]=$tableau[$j];
            $tableau[$j]=$temp;
        }
    }
}
foreach ($tableau as $caseAMontrer){
    echo $caseAMontrer;
}
?>