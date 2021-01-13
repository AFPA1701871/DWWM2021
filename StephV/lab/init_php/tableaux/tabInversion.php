<?php

$tab=array(8,8,6,1,3,7,5,6,5);
for ($i=0;$i<=count($tab)-1;$i++){
    for ($j=$i+1;$j<count($tab);$j++){
        $temp=$tab[$i];
        $tab[$i]=$tab[$j];
        $tab[$j]=$temp;
    }
}
echo $tab;

?>