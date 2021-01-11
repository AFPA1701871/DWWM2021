<?php
$big=0;
        for($i = 1; $i <=3; $i++){
            $num =readline("Écrivez un nombre : ") ."\n";
                if ($i=1 && $num>$big){
                    $big = $num;
                }
        }

    echo "Le nombre le plus grand était : " .$big;

?>