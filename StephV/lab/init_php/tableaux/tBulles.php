<?php
$tab=[1,9,5,6,3];

$bulle=true;

while($bulle){
    $bulle=false;
        for ($i=0;$i<count($tab);$i++){
            if ($tab[$i]<$tab[$i+1]){
                $temp=$tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$temp;
                $bulle=true;
            }
        }
    }
print_r ($tab);
?>