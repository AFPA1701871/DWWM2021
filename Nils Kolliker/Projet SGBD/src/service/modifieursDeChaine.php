<?php
//permet de rajouter le chemin du fichier au nom du fichier pour tous ceux etant dans la BDD
//prend en entré un string
//retourne un string
function completeChemin($string){
    return "../BDD/".$string;
}

//vire tous les espaces de la chaine 
//prend en entré un string
//retourne un string
function jAimePasLesEspaces ($string){
    return str_replace(" ","",$string);
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
    return str_replace(",",";",$string).";\r\n";
}

?>