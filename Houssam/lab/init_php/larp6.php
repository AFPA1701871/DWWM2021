<?php
$big=0;
$laposition=0;
        for($i = 1; $i = 3; $i++){
            $num =readline("Écrivez un nombre : ") ."\n";
                if ($i=1 or $num>$big){
                    $big = $num;
                    $laposition=$i;
                }
        }

        echo "Le nombre le plus grand était : " .$big;
        echo "Il a été saisi en position numéro  : " .$laposition;

?>