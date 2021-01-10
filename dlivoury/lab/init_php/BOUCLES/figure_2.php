<?php
for($i=1;$i<14;$i++){
    for($j=1; $j<=7-sqrt((7-$i)*(7-$i)) ;$j++){
        echo "*";
    }
    echo"\n";
}
?>