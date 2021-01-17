<?php
$tableau = array(4,8,7,9,1,5,4,6);
do{
    $booleanFlag=false;
    for ($i=0;$i<count($tableau)-1;$i++){
        if($tableau[$i]<$tableau[$i+1]){
            $temp=$tableau[$i];
            $tableau[$i]=$tableau[$i+1];
            $tableau[$i+1]=$temp;
            $booleanFlag=true;
        }
    }
}while ($booleanFlag);
foreach ($tableau as $caseAMontrer){
    echo $caseAMontrer;
}
?>