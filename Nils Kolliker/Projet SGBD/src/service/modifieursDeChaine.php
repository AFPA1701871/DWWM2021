<?php
//permet de rajouter le chemin du fichier au nom du fichier pour tous ceux etant dans la BDD
//prend en entré un string
//retourne un string
function completeChemin($string){
    return "../BDD/".$string;
}

//permet de séparer un string en un tableau de string découpé selons le caractère en entré
//prend en entré un string et un char
//retourne un tableau de string
function couperSelonLeCaractère($string,$char){
    $int=substr_count($string,$char);
    for ($i=0;$i<$int;$i++){
        $stringCoupe[]=stristr($string, $char, true);
        $string=substr(stristr($string, $char),1);
    }
    return $stringCoupe;
}

//permet de récuperer dans une chaine, une sous chaine qui se trouve entre 2 string
//prend en entré le string total et les 2 bornes (sous forme de string egalement)
//retourne un string
function entreLesDeux($string,$borne1,$borne2){
    $indiceborne1=strpos(strtoupper($string),$borne1)+strlen($borne1);
    $indiceborne2=strpos(strtoupper($string),$borne2);
    return substr($string,$indiceborne1,$indiceborne2-$indiceborne1);
}

//permet de remplacer les virgules par des points virgules et rajoute à la fin un point virgule et un saut de ligne
//prend en entré un string
//retourne un stringue
function convertisseurUserBdd($string){
    return str_replace(",",";",$string).";";
}

//permet de redimentioner tous les string d'un tableau de dim 2 par rapport au plus grand de la colonne
//prend en entré un tableau de string de dim 2
//retourne un tableau de dim 2
function egaliseurDeTaille($tableau){
    for ($j=0;$j<count($tableau[0]);$j++){
        $theBig=strlen($tableau[0][$j]);
        for ($i=1;$i<count($tableau);$i++){
            ($theBig<strlen($tableau[$i][$j]))?$theBig=strlen($tableau[$i][$j]):null;
        }
        for ($i=0;$i<count($tableau);$i++){
            while(strlen($tableau[$i][$j])<$theBig){
                $tableau[$i][$j]=$tableau[$i][$j]." ";
            }
        }
    }
    return $tableau;
}
?>