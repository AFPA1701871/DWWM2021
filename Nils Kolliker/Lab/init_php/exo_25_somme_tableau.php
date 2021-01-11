<?php
$tableau1 = array(4,8,7,9,1,5,4,6);
$tableau2 = array(7,6,5,2,1,3,7,4);
echo "[";
for($i=0;$i<count($tableau1);$i++){
    $tableauResultat[$i]=$tableau1[$i]+$tableau2[$i];
    if($i<count($tableau1)-1){
        echo $tableauResultat[$i]." ";
    }else{
        echo $tableauResultat[$i]."]";
    }
}
?>