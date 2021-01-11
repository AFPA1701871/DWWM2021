<?php
    $tab=[5,95,42,231,56,41,1];
    $tmp=0;
    $drapeau=0;

    echo "Le tableau avant le tri est :" ."\n";
    print_r($tab);

    while($drapeau=0){
        $drapeau=1;
            for ($i=0;$i<count($tab)-1;$i++){
                if ($tab[$i]<$tab[$i+1]) {
                    $tmp=$tab[$i];
                    $tab[$i]=$tab[$i+1];
                    $tab[$i+1]=$tmp;
                    $drapeau=0;
                }
            }
    }

    echo "\n";
    echo "Le tableau après le tri décroissant est :"."\n";
    print_r($tab);
?>