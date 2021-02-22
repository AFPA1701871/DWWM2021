<?php 

$saisie = readline("Saisir un mot : ");

echo f_inverseMot($saisie,$retour,0);

function f_inverseMot(string $saisie){
    if(strlen($saisie)==1){
        return $saisie;
    }
    return f_inverseMot(substr($saisie,1,(strlen($saisie)-1))).substr($saisie,0,1);
}

?>  