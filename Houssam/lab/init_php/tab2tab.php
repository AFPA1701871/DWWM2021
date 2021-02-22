<?php

<<<<<<< HEAD
$tab[1]=array ("4","8","7","9","1","5","4","6");
$tab[2]=array ("7","6","5","2","1","3","7","4");
    for ($i = 1; $i <= $num; $i++){
        $tab[] =readline("Écrivez une somme : ");
        $somme=$somme+$tab[$i];
    }
    echo "La somme est : ".$somme;
=======
$tab1=[4,8,7,9,1,5,4,6];
$tab2=[7,6,5,2,1,3,7,4];
$tab3=[];

    for ($i = 0; $i <= count($tab1)-1; $i++){
        $tab3[$i]=$tab1[$i]+$tab2[$i];
    }
    print_r($tab3)
>>>>>>> 477cdff28407f78459ac2c81faa7a302b2f440f1
?>