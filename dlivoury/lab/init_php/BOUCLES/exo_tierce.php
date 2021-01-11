

<?php
do{
    $nbChevaux=readline("saisir le nombre de chevaux partants: ");
    $nbChevPartis=readline("saisir le nombre de chevaux joués: ");
}while($nbChevaux<=0 or $nbChevaux<$nbChevPartis);
    $ordre=1;
    $facto=1;
    for($i=1;$i<=$nbChevPartis;$i++){
        $facto=$facto*$i;
        $ordre=$ordre*($i+$nbChevaux-$nbChevPartis);
       
    }
    $desordre=$ordre/$facto;
    echo"dans l'ordre, une chance sur ".$ordre.' '."de gagner\n";
    echo"dans le desordre, une chance sur".$desordre.' '."de gagner";
    ?>



