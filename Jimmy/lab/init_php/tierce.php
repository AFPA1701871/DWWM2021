<?php
    $nbchvx = readline('Ecrire nombre de chevaux');
    $nbjouer = readline ('Nombre de chevaux jouer : ');
    $f =1;
    $f2=1;
    $f3 = 1;

    while($nbchvx<0){
        echo 'Nombre incorrect'."\n";
        $nbchvx = readline('Ecrire nombre de chevaux');
    }
        while ($nbjouer < 0 );{
        echo "Nombre incorrect"."\n";
        $nbjouer = readline ('Nombre de chevaux jouer : ');
        }
        for ($i=0; $i < $nbchvx ; $i++) { 
            $f= $f*i;
        }
        for ($i=0; $i < $nbjouer; $i++) { 
            $f2 = $f2 *$i;
        }
        
        for ($i=0; $i < ($nbchvx - $nbjouer) ; $i++) { 
            $f3 = $f3 * $i;    
        }

        $X = $f / $f3;
        $Y = $f / ($f2*$f3);
        echo "Dans l'ordre, une chance sur ".$X. " de gagner";
        echo "Dans le désordre, une chance sur ".$Y. " de gagner";
?>