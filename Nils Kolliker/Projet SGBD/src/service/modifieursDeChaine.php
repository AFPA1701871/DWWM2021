<?php
//permet de rajouter le chemin du fichier au nom du fichier pour tous ceux etant dans la BDD
//prend en entré un string
//retourne un string
function completeChemin($string){
    return "../BDD/".$string;
}
//permet de séparer un string en un tableau de string découpé selons les premiers points virgules
//prend en entré un string et un entier
//retourne un tableau de string
function couperSelonLesPointsVirgules($string){
    $int=substr_count($string,";");
    for ($i=0;$i<$int;$i++){
        $stringCoupe[]=stristr($string, ";", true);
        $string=substr(stristr($string, ";"),1);
    }
    return $stringCoupe;
}

?>