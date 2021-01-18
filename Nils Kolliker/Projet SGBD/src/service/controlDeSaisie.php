<?php
//vérifie si une ligne complete est dans la table
//prend en entré un tableau de string et l'emplacement d'un fichier
//retourne un booleen
function esCeDansLaTable($tableau,$fichier){
    $cEstDedans=false;
    $fp = fopen($fichier, "r"); //on saute la ligne 1
    $ligne = fgets($fp,4096);  //permet de lire la ligne complete
    while (!feof($fp)){
        $ligne = fgets($fp,4096);
        $ligneTab=couperSelonLeCaractère($ligne,";");
        if ($tableau==$ligneTab){
            $cEstDedans=true;
        }
    }
    fclose($fp);
    return $cEstDedans;
}

//vérifie qu'une chaine finie par un point virgule
//prend en entré une chaine
//retourne un booleen
function pointVirguleFinal($string){
    (substr($string,-1)==";")?$ilEstLa=true:$ilEstLa=false;
    return $ilEstLa;
}

//vérifien qu'une chaine contient bien une paire de parentheses et qu'elle se ferme bien à l'avant dernier charactère
//prend en entré une chaine
//retourne un booleen
function lesParenthesesSontLaEtBienPlace($string){
    (substr_count($string,"(")==1&&substr_count($string,")")==1&&substr($string,-2,1)==")")?$ellesSontLaEtBienPlace=true:$ellesSontLaEtBienPlace=false;
    return $ellesSontLaEtBienPlace;
}

//vérifie que l'utilisateur a rentré une ligne de commande valide, affiche l'erreur si il y en a, et retourne son type (ou false en cas d'erreur) /!\ quit renvoit aussi false mais n'affiche pas d'erreur
//prend en entré une chaine 
//retourne une chaine indiquant le type de ligne de commande ou false
function ligneDeCommandeValide($string){
    if ($string!=QUIT){
        if (pointVirguleFinal($string)){
            if (strpos(strtoupper($string),"CREATETABLE")===0){
                if (lesParenthesesSontLaEtBienPlace($string)){
                    return "createTable";
                }else{
                    echo "erreur de syntaxe: les parenthèses posent problème\n";
                }
            //rajouter du }else if{ ici pour rajouter de la ligne de commande
            }else{
                echo "erreur de syntaxe: je ne connais pas cette fonction\n";
            }
        }else{
            echo "erreur de syntaxe: il manque un point virgule\n";
        }
    }
    return false;
}
//renvois vrai si tous les parametres en entré sont de 25 char ou moins et faux si au moins un string fait plus de 25 char
//prend un tableau de string
//retourne un booleen
function moinsDe25($tabString){
    $moinsDe25=true;
    foreach ($tabString as $string){
        (strlen($string)>25)?$moinsDe25=false:null;
    }
    return $moinsDe25;
}
function nonNul($tabString){
    $nonNul=true;
    foreach ($tabString as $string){
        (strlen($string)==0)?$nonNul=false:null;
    }
    return $nonNul;    
}

?>