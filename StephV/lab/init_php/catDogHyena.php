//permutation 3 variables
<?php
    $cat=readline("Nommer votre animal de compagnie 1");
    $dog=readline("Nommer votre animal de compagnie 2");
    $hyena=readline("Nommer votre animal de compagnie 3");
    $temp=$hyena;
    $hyena=$dog;
    $dog=$cat;
    $cat=$temp;

    echo " cat:". $cat ." dog:". $dog . " hyena:" . $hyena;

 ?>