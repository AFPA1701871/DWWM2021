<?php


//compte le nombre de fois qu'apparait un caractere dans une chaine
//en entré prend une chaine à annaryser et un char   /!\ le char est un string de 1 caractère sinon ça ne compte pas et ça renvoit 0
//en sortie, renvoit un entier
function countTheChar($string,$char){
    $tabString=str_split($string,1);
    $compteur=0;
    for($i=0;$i<count($tabString);$i++){
        ($tabString[$i]==$char)?$compteur++:null;
    }
    return $compteur;
}

//compte le nombre de voyelles d'une chaine
//en entré, prend une chaine
//en sortie, renvoit un entier
function countVowel($string){
    $tabVowet=["a","e","i","o","u","y"];
    $nbrVowet=0;
    for($i=0;$i<6;$i++){
        $nbrVowet=$nbrVowet+countTheChar($string,$tabVowet[$i]);
    }
    return $nbrVowet;
}

//retire toutes les occurences d'un caractere dans une chaine de caractere
//en entré, prend une chaine et un char    /!\ le char ne doit contenire qu'un caractère sinon, ça ne purge pas et ça renvoit la chaine non modifié
//en sortie, renvois une chaine
function purge($string,$charAPurger){
    $tabString=str_split($string,1);
    for($i=0;$i<count($tabString);$i++){
        ($tabString[$i]==$charAPurger)?$tabString[$i]="":null;
    }
    return implode($tabString);
}

//retire toutes les occurences d'un ou plusieur caracteres dans une chaine de caractere
//en entré, prend 2 chaines, la chaine à purger suivie des caractères à purger
//en sortie, renvois une chaine
function multiPurge($string,$charAPurgers){
    $tabCharAPurger=str_split($charAPurgers,1);
    for($i=0;$i<count($tabCharAPurger);$i++){
        $string=purge($string,$tabCharAPurger[$i]);
    }
    return $string;
}

function inversionRecurcive($string){
    if (strlen($string)==1){
        return $string;
    }else{
        return inversionRecurcive(substr($string,1,(strlen($string)-1))).substr($string,0,1);
    }
}
?>